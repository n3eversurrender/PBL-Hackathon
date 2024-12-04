<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ManajemenAkunController;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DataPelatihController;
use App\Http\Controllers\DataPesertaController;
use App\Http\Controllers\DataRiwayatTransaksiController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\MainAdminController;
use App\Http\Controllers\PesanAdminController;
use App\Http\Controllers\DaftarPelatihanController;
use App\Http\Controllers\DashboardPelatihController;
use App\Http\Controllers\DashboardPesertaController;
use App\Http\Controllers\DataKategoriController;
use App\Http\Controllers\DataKursusController;
use App\Http\Controllers\DataSertifikatController;
use App\Http\Controllers\DataUmpanBalikController;
use App\Http\Controllers\PengaturanPelatihController;
use App\Http\Controllers\PengaturanPesertaController;
use App\Http\Controllers\PengelolaanKursusController;
use App\Http\Controllers\PengelolaanPelatihanController;
use App\Http\Controllers\PengelolaanSertifikatController;
use App\Http\Controllers\PesanPelatihController;
use App\Http\Controllers\PesanPesertaController;
use App\Http\Controllers\TambahKursusController;
use App\Http\Controllers\PesertaKursusController;
use App\Http\Controllers\DetailPesertaKursusController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\LoginPenggunaController;
use App\Http\Controllers\PengelolaanKurikulumController;
use App\Http\Controllers\PenilaianKursusController;
use App\Http\Controllers\UmpanBalikController;
use App\Http\Middleware\PeranMiddleware;

// Route Default
Route::get('/', function () {
    return redirect('/Home');
});

// Route Layout
Route::get('/Main', [MainController::class, 'Main']);
Route::get('/MainAdmin', [MainAdminController::class, 'mainAdmin']);
Route::get('/MainPeserta', [MainController::class, 'mainPeserta']);
Route::get('/MainPelatih', [MainController::class, 'mainPelatih']);

// Route Web Skill Bridge
Route::get('/Home', [MainController::class, 'Home']);
Route::get('/DaftarKursus', [MainController::class, 'daftarKursus'])->name('daftarKursus');
Route::get('/TentangKami', [MainController::class, 'tentangKami']);
Route::get('/Daftar', [ManajemenAkunController::class, 'Daftar']);
Route::get('/Masuk', [ManajemenAkunController::class, 'Masuk'])->name('Masuk');
Route::get('/CoursePage/{kursus_id}', [MainController::class, 'coursePage'])->name('coursePage');
Route::get('/DaftarTransaksi', [MainController::class, 'daftarTransaksi'])->name('daftarTransaksi');
Route::post('/DaftarPendaftaran', [MainController::class, 'store']);

Route::get('/PaymentPage', [MainController::class, 'paymentPage'])->name('PaymentPage');
Route::post('/umpan-balik', [UmpanBalikController::class, 'store'])->name('umpan_balik.store');



Route::post('/Masuk', [LoginPenggunaController::class, 'login'])->name('login');

// Route Peserta
Route::middleware(['auth', PeranMiddleware::class . ':Peserta'])->group(function () {
    Route::post('/logoutPeserta', [LoginPenggunaController::class, 'logoutPeserta'])->name('logoutPeserta');
    Route::get('/DashboardPeserta', [DashboardPesertaController::class, 'dashboardPeserta'])->name('DashboardPeserta');
    Route::get('/Kursus', [KursusController::class, 'Kursus']);
    Route::get('/KursusModul/{id_kursus}', [KursusController::class, 'kursusModul'])->name('kursusModul.show');
    Route::get('/KursusMateri', [KursusController::class, 'kursusMateri'])->name('kursusMateri');
    Route::get('/PenilaianKursus', [PenilaianKursusController::class, 'penilaianKursus']);
    Route::post('/submit-rating', [PenilaianKursusController::class, 'submitRating'])->name('submit.rating');


    Route::get('/PengaturanPeserta', [PengaturanPesertaController::class, 'pengaturanPeserta'])->name('PengaturanPeserta');    Route::post('/peserta/store', [PengaturanPesertaController::class, 'storePeserta'])->name('peserta.store');
    Route::put('/peserta/update', [PengaturanPesertaController::class, 'updatePeserta'])->name('peserta.update');

    Route::put('/peserta/{peserta_id}', [PengaturanPesertaController::class, 'updatePesertaKeahlian'])->name('pesertaKeahlian.update');
    Route::delete('/peserta/{peserta_id}', [PengaturanPesertaController::class, 'destroyPeserta'])->name('peserta.destroy');


    // Route untuk menghapus satu item 
    Route::delete('/peserta/{peserta_id}/hapuspendidikan/{pendidikan}', [PengaturanPesertaController::class, 'hapusPendidikanItem'])->name('peserta.hapusPendidikanItem');
    Route::delete('/peserta/{peserta_id}/hapus-pengalaman/{pengalaman_kerja}', [PengaturanPesertaController::class, 'hapusPengalamanItem'])->name('peserta.hapusPengalamanItem');
    Route::delete('/peserta/{peserta_id}/hapus-keahlian/{keahlian}', [PengaturanPesertaController::class, 'hapusKeahlianItem'])->name('peserta.hapusKeahlianItem');

    Route::get('/DaftarPelatihan', [DaftarPelatihanController::class, 'daftarPelatihan']);
    Route::delete('/daftar-pelatihan/{pendaftaran_id}', [DaftarPelatihanController::class, 'destroy'])->name('DaftarPelatihan.destroy');
});


Route::middleware(['auth', PeranMiddleware::class . ':Pelatih'])->group(function () {
    Route::post('/logoutPelatih', [LoginPenggunaController::class, 'logoutPelatih'])->name('logoutPelatih');
    Route::get('/DashboardPelatih', [DashboardPelatihController::class, 'dashboardPelatih'])->name('DashboardPelatih');
    Route::get('/PesanPelatih', [PesanPelatihController::class, 'pesanPelatih']);


    Route::get('/PengaturanPelatih', [PengaturanPelatihController::class, 'pengaturanPelatih'])->name('PengaturanPelatih');
    Route::put('/pelatih/update', [PengaturanPelatihController::class, 'updatePelatih'])->name('pelatih.update');
    Route::post('/pelatih/store', [PengaturanPelatihController::class, 'storePelatih'])->name('pelatih.store');
    Route::post('/pengaturan-pelatih/verifikasi', [PengaturanPelatihController::class, 'ajukanVerifikasi'])->name('pengaturanPelatih.ajukanVerifikasi');


    Route::put('/pelatih/{pelatih_id}', [PengaturanPelatihController::class, 'updatePelatihSpesialisasi'])->name('pelatihSpesialisasi.update');
    Route::delete('/pelatih/{pelatih_id}', [PengaturanPelatihController::class, 'destroyPelatih'])->name('pelatih.destroy');



    Route::get('/PengelolaanSertifikat', [PengelolaanSertifikatController::class, 'pengelolaanSertifikat'])->name('PengelolaanSertifikat');
    Route::get('/TambahSertifikat', [PengelolaanSertifikatController::class, 'tambahSertifikat'])->name('TambahSertifikat');
    Route::post('/tambah-sertifikat', [PengelolaanSertifikatController::class, 'store'])->name('sertifikat.store');
    Route::get('/edit-sertifikat/{sertifikat_id}', [PengelolaanSertifikatController::class, 'editSertifikat'])->name('sertifikat.edit');
    Route::put('/update-sertifikat/{sertifikat_id}', [PengelolaanSertifikatController::class, 'update'])->name('sertifikat.update');
    Route::delete('/delete-sertifikat/{sertifikat_id}', [PengelolaanSertifikatController::class, 'destroy'])->name('sertifikat.delete');

    Route::get('/PengelolaanPelatihan', [PengelolaanPelatihanController::class, 'pengelolaanPelatihan']);
    Route::get('/PengelolaanPelatihanDetail/{kursus_id}', [PengelolaanPelatihanController::class, 'pengelolaanPelatihanDetail'])->name('pengelolaanPelatihanDetail.show');

    Route::delete('/pendaftaran/{pendaftaran_id}', [PengelolaanPelatihanController::class, 'destroy'])->name('Pendaftaran.destroy');
    Route::put('/pendaftaran/{pendaftaran_id}', [PengelolaanPelatihanController::class, 'update'])->name('pendaftaran.update');

    Route::get('/PengelolaanKursus', [PengelolaanKursusController::class, 'pengelolaanKursus'])->name('PengelolaanKursus');
    Route::delete('/PengelolaanKursus/{kursus_id}', [PengelolaanKursusController::class, 'destroy'])->name('PengelolaanKursus.destroy');
    Route::put('/PengelolaanKursus/{kursus_id}', [PengelolaanKursusController::class, 'update'])->name('PengelolaanKursus.update');
    Route::post('/PengelolaanKursus', [PengelolaanKursusController::class, 'store'])->name('PengelolaanKursus.store');
    Route::get('/TambahKursus', [TambahKursusController::class, 'tambahKursus']);

    Route::get('/PengelolaanKurikulum', [PengelolaanKurikulumController::class, 'pengelolaanKurikulum'])->name('PengelolaanKurikulum');
    Route::get('/TambahKurikulum/{kursus_id}', [PengelolaanKurikulumController::class, 'tambahKurikulum'])->name('tambahKurikulum');
    Route::post('/kurikulum/store', [PengelolaanKurikulumController::class, 'store'])->name('kurikulum.store');
    Route::put('/kurikulum/{id}', [PengelolaanKurikulumController::class, 'update'])->name('PengelolaanKurikulum.update');
    Route::delete('/kurikulum/{id}', [PengelolaanKurikulumController::class, 'destroy'])->name('PengelolaanKurikulum.destroy');
});

// Rute untuk halaman login admin
Route::get('/LoginAdmin', [LoginAdminController::class, 'loginAdmin'])->name('LoginAdmin');
Route::post('/LogindAdmin', [LoginAdminController::class, 'processLogin']);


// Route Admin
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginAdminController::class, 'logout'])->name('logout');
    Route::get('/DashboardAdmin', [DashboardAdminController::class, 'dashboardAdmin'])->name('dashboard');
    Route::get('/DataAdmin', [DataAdminController::class, 'dataAdmin'])->name('admin.index');
    Route::get('/TambahAdmin', [DataAdminController::class, 'tambahAdmin']);
    Route::post('/admin/store', [DataAdminController::class, 'store'])->name('admin.store');
    Route::put('/DataAdmin/{admin_id}', [DataAdminController::class, 'update'])->name('PengelolaanAdmin.update');
    Route::delete('/DataAdmin/{admin_id}', [DataAdminController::class, 'destroy'])->name('PengelolaanAdmin.destroy');

    Route::get('/DataKategori', [DataKategoriController::class, 'dataKategori'])->name('DataKategori');
    Route::get('/TambahKategori', [DataKategoriController::class, 'tambahKategori'])->name('TambahKategori');
    Route::post('/TambahKategori/store', [DataKategoriController::class, 'store'])->name('kategori.store');
    Route::delete('/TambahKategori/{kategori_id}', [DataKategoriController::class, 'destroy'])->name('kategori.destroy');


    Route::get('/DataKursus', [DataKursusController::class, 'dataKursus'])->name('DataKursus');
    Route::delete('/kursus/{kursus_id}', [DataKursusController::class, 'destroy'])->name('kursus.destroy');

    Route::get('/DataPeserta', [DataPesertaController::class, 'dataPeserta'])->name('DataPeserta');
    Route::delete('/peserta/{pengguna_id}', [DataPesertaController::class, 'destroy'])->name('Peserta.destroy');

    Route::get('/DataPelatih', [DataPelatihController::class, 'dataPelatih'])->name('DataPelatih');
    Route::delete('/pelatih/{pengguna_id}', [DataPelatihController::class, 'destroy'])->name('DataPelatih.destroy');
    Route::put('/pelatih/{pengguna_id}/status', [DataPelatihController::class, 'update'])->name('Pelatih.updateStatus');
    Route::patch('/admin/verifikasi/{verifikasi_id}/{status}', [DataPelatihController::class, 'konfirmasiVerifikasi'])->name('admin.verifikasi.konfirmasi');


    Route::get('/DataRiwayatTransaksi', [DataRiwayatTransaksiController::class, 'dataRiwayatTransaksi'])->name('dataRiwayatTransaksi');
    Route::delete('/pembayaran/{pembayaran_id}', [DataRiwayatTransaksiController::class, 'destroy'])->name('pembayaran.destroy');

    Route::get('/DataSertifikat', [DataSertifikatController::class, 'dataSertifikat']);
    Route::delete('/deleteSertifikat/{sertifikat_id}', [DataSertifikatController::class, 'destroy'])->name('DataSertifikat.delete');

    Route::get('/DataUmpanBalik', [DataUmpanBalikController::class, 'dataUmpanBalik']);
    Route::delete('/DataUmpanBalik/{id}', [DataUmpanBalikController::class, 'destroy'])->name('UmpanBalik.destroy');

    Route::get('/PesanAdmin', [PesanAdminController::class, 'pesanAdmin']);
    Route::get('/PesertaKursus', [PesertaKursusController::class, 'pesertaKursus']);
    Route::get('/DetailPesertaKursus', [DetailPesertaKursusController::class, 'detailPesertaKursus']);
});
