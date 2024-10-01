<!-- Rule Untuk Penaman Route,Controller & Class -->
<!-- Route: Huruf depan kata pertama kapital (contoh: Main), dan untuk dua kata (contoh: MainAdmin). -->
<!-- Controller: Gabungan dua kata, setiap kata diawali huruf kapital (contoh: MainController). -->
<!-- Class: Jika dua kata, pisahkan dengan underscore dan gunakan huruf kapital di awal setiap kata (contoh: Main_Admin). -->

<?php
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DataPelatihController;
use App\Http\Controllers\DataPembayaranController;
use App\Http\Controllers\DataPesertaController;
use App\Http\Controllers\DataRiwayatTransaksiController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\MainAdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ManajemenAkunController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PesanAdminController;
use App\Http\Controllers\PesanController;


// Route Layout
Route::get('/Main', [MainController::class, 'Main']);
Route::get('/MainAdmin', [MainAdminController::class, 'Main_Admin']);
Route::get('/MainLogin', [MainController::class, 'Main_Login']);


// Route Pengguna 
Route::get('/Home', [MainController::class, 'Home']);
Route::get('/Daftar', [ManajemenAkunController::class, 'Daftar']);
Route::get('/Masuk', [ManajemenAkunController::class, 'Masuk']);
Route::get('/Dashboard', [DashboardController::class, 'Dashboard']);
Route::get('/Kursus', [KursusController::class, 'Kursus']);
Route::get('/KursusModul', [KursusController::class, 'Kursus_Modul']);
Route::get('/KursusMateri', [KursusController::class, 'Kursus_Materi']);
Route::get('/Pesan', [PesanController::class, 'Pesan']);
Route::get('/Pengaturan', [PengaturanController::class, 'Pengaturan']);
Route::get('/DaftarKursus', [MainController::class, 'Daftar_Kursus']);
Route::get('/TentangKami', [MainController::class, 'Tentang_Kami']);



// Route Admin
Route::get('/DashboardAdmin', [DashboardAdminController::class, 'Dashboard_Admin']);
Route::get('/DataAdmin', [DataAdminController::class, 'Data_Admin']);
Route::get('/DataPeserta', [DataPesertaController::class, 'Data_Peserta']);
Route::get('/DataPelatih', [DataPelatihController::class, 'Data_Pelatih']);
Route::get('/DataPembayaran', [DataPembayaranController::class, 'Data_Pembayaran']);
Route::get('/DataRiwayatTransaksi', [DataRiwayatTransaksiController::class, 'Data_Riwayat_Transaksi']);
Route::get('/PesanAdmin', [PesanAdminController::class, 'Pesan_Admin']);
