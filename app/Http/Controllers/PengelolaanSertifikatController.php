<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Pendaftaran;
use App\Models\Pengguna;
use App\Models\Peserta;
use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Untuk logging
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator; // Jika validasi manual digunakan
use Illuminate\Support\Facades\Storage;


class PengelolaanSertifikatController extends Controller
{
    public function index()
    {
        $sertifikat = Sertifikat::paginate(10); // Ensure pagination
        return view('nama_view', compact('sertifikat'));
    }
    
    
    // Menampilkan daftar sertifikat dengan paginasi
    public function pengelolaanSertifikat()
    {
        $id = Auth::id(); // Ambil ID pengguna yang sedang login

        // Ambil sertifikat berdasarkan kursus yang dimiliki oleh pengguna
        $sertifikat = Sertifikat::whereHas('kursus', function ($query) use ($id) {
            $query->where('pengguna_id', $id);
        })->paginate(10);

        $peserta = Peserta::all();

        return view('pelatih.PengelolaanSertifikat', [
            'sertifikat' => $sertifikat,
        ]);
    }



    // Menampilkan form untuk menambahkan sertifikat
    public function tambahSertifikat()
    {
        $id = Auth::id();
    
        $kursus = Kursus::where('pengguna_id', $id)->get();
        $pendaftaran = Pendaftaran::with('peserta', 'pengguna')->get(); // Fetch Pendaftaran with related data
    
        return view('pelatih.TambahSertifikat', compact('kursus', 'pendaftaran'));
    }
    


    // Menyimpan sertifikat baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'kursus_id' => 'required|exists:kursus,kursus_id',
            'pendaftaran_id' => 'required|exists:pendaftaran,pendaftaran_id',
            'file_sertifikat' => 'required|file|mimes:pdf|max:10240',
            'nomor_sertifikat' => 'required|string',
            'tanggal_terbit' => 'required|date',
        ]);

        $file = $request->file('file_sertifikat');
        $filePath = $file->store('sertifikat_pdfs', 'public'); 

        
        $fileName = $filePath; 

        $sertifikat = new Sertifikat();
        $sertifikat->kursus_id = $request->kursus_id;
        $sertifikat->pendaftaran_id = $request->pendaftaran_id;
        $sertifikat->nama_kursus = Kursus::find($request->kursus_id)->judul; 
        $sertifikat->file_sertifikat = $fileName; 
        $sertifikat->nomor_sertifikat = $request->nomor_sertifikat;
        $sertifikat->tanggal_terbit = $request->tanggal_terbit;
        $sertifikat->save();

        return redirect()->route('PengelolaanSertifikat')->with('success', 'Sertifikat berhasil ditambahkan.');
    }

    public function editSertifikat($sertifikat_id)
    {
        $sertifikat = Sertifikat::findOrFail($sertifikat_id);
        $kursus = Kursus::all(); 

       
        return view('pelatih.EditSertifikat', compact('sertifikat', 'kursus'));
    }

    public function update(Request $request, $sertifikat_id)
    {

        Log::info('Request Data: ', $request->all());

        $validatedData = $request->validate([
            'pendaftaran_id' => 'required|exists:peserta,pendaftaran_id',
            'file_sertifikat' => 'nullable|file|mimes:pdf|max:10240', 
            'nomor_sertifikat' => 'required|string',
            'tanggal_terbit' => 'required|date',
        ]);

        $sertifikat = Sertifikat::findOrFail($sertifikat_id);

        if ($request->hasFile('file_sertifikat')) {
            if (Storage::disk('public')->exists($sertifikat->file_sertifikat)) {
                Storage::disk('public')->delete($sertifikat->file_sertifikat);
            }
            $file = $request->file('file_sertifikat');
            $originalFileName = $file->getClientOriginalName();
            $filePath = $file->store('sertifikat_pdfs', 'public');
            $sertifikat->file_sertifikat = $filePath;
        }

        $sertifikat->pendaftaran_id = $validatedData['pendaftaran_id'];
        $sertifikat->nomor_sertifikat = $validatedData['nomor_sertifikat'];
        $sertifikat->tanggal_terbit = $validatedData['tanggal_terbit'];

        $success = $sertifikat->save();

        if ($success) {
            Log::info('Sertifikat berhasil diperbarui: ', $sertifikat->toArray());
        } else {
            Log::error('Gagal menyimpan perubahan pada sertifikat ID: ' . $sertifikat_id);
        }

        return redirect()->route('PengelolaanSertifikat')->with('success', 'Sertifikat berhasil diperbarui.');
    }


    public function destroy($sertifikat_id)
    {
        $sertifikat = Sertifikat::findOrFail($sertifikat_id);

        if (Storage::disk('public')->exists($sertifikat->file_sertifikat)) {
            Storage::disk('public')->delete($sertifikat->file_sertifikat);
        }

        $sertifikat->delete();

        return redirect()->route('PengelolaanSertifikat')->with('success', 'Sertifikat berhasil dihapus.');
    }
}
