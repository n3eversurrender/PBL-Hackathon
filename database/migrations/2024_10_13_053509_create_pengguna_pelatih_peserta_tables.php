<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaPelatihPesertaTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('username')->unique();
            $table->string('kata_sandi');
            $table->enum('role', ['admin', 'superadmin'])->default('admin'); // Kolom role dengan pilihan 'admin' atau 'superadmin'
            $table->timestamps();
        });

        // Tabel pengguna
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id('pengguna_id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('no_telepon');
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('kata_sandi');
            $table->string('foto_profil')->nullable();
            $table->enum('peran', ['Pelatih', 'Peserta']);
            $table->timestamps();
        });

        // Tabel pelatih
        Schema::create('pelatih', function (Blueprint $table) {
            $table->id('pelatih_id');
            $table->unsignedBigInteger('pengguna_id')->nullable();
            $table->foreign('pengguna_id')->references('pengguna_id')->on('pengguna')->onDelete('cascade');
            $table->integer('pengalaman_kerja');
            $table->enum('status', ['Aktif', 'Tidak Aktif'])->default('Tidak Aktif');
            $table->timestamps();
        });

        // Tabel spesialisasi
        Schema::create('spesialisasi', function (Blueprint $table) {
            $table->id('spesialisasi_id');
            $table->unsignedBigInteger('pelatih_id')->nullable();
            $table->string('nama_spesialisasi');
            $table->foreign('pelatih_id')->references('pelatih_id')->on('pelatih')->onDelete('cascade');
            $table->timestamps();
        });

        // Tabel peserta
        Schema::create('peserta', function (Blueprint $table) {
            $table->id('peserta_id');
            $table->unsignedBigInteger('pengguna_id')->nullable();
            $table->foreign('pengguna_id')->references('pengguna_id')->on('pengguna')->onDelete('cascade');
            $table->string('pendidikan')->nullable();
            $table->text('pengalaman_kerja')->nullable();
            $table->timestamps();
        });

        // Tabel keahlian
        Schema::create('keahlian', function (Blueprint $table) {
            $table->id('keahlian_id');
            $table->unsignedBigInteger('peserta_id')->nullable();
            $table->string('nama_keahlian');
            $table->foreign('peserta_id')->references('peserta_id')->on('peserta')->onDelete('cascade');
            $table->timestamps();
        });

        // Tabel kursus
        Schema::create('kursus', function (Blueprint $table) {
            $table->id('kursus_id');
            $table->unsignedBigInteger('pengguna_id')->nullable(); // Menambahkan nullable untuk pengguna_id
            $table->string('judul');
            $table->text('deskripsi');
            $table->decimal('harga', 10, 2);
            $table->enum('tingkat_kesulitan', ['-', 'Pemula', 'Menengah', 'Lanjutan'])->default('-'); // Default value
            $table->float('rating')->nullable();
            $table->enum('status', ['Aktif', 'Tidak Aktif'])->default('Tidak Aktif');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->integer('kapasitas');
            $table->string('lokasi');
            $table->string('foto_kursus')->nullable(); // Foto kursus
            $table->foreign('pengguna_id')->references('pengguna_id')->on('pengguna')->onDelete('cascade');
            $table->timestamps();
        });

        // Tabel kurikulum
        Schema::create('kurikulum', function (Blueprint $table) {
            $table->id('kurikulum_id');
            $table->unsignedBigInteger('kursus_id')->nullable();
            $table->string('nama_topik');
            $table->text('deskripsi');
            $table->integer('durasi'); // dalam jam
            $table->string('materi')->nullable(); // Mengubah tipe data ke string untuk menyimpan URL/path video
            $table->foreign('kursus_id')->references('kursus_id')->on('kursus')->onDelete('cascade');
            $table->timestamps();
        });

        // Tabel pendaftaran
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id('pendaftaran_id');
            $table->unsignedBigInteger('pengguna_id')->nullable();
            $table->unsignedBigInteger('kursus_id')->nullable();
            $table->date('tgl_pendaftaran');
            $table->enum('status_pendaftaran', ['Menunggu', 'Aktif', 'Selesai', 'Dibatalkan'])->default('Menunggu');
            $table->enum('status_pembayaran', ['Pending', 'Berhasil', 'Gagal']);
            $table->text('komentar')->nullable();
            $table->float('rating')->nullable();
            $table->foreign('pengguna_id')->references('pengguna_id')->on('pengguna')->onDelete('cascade');
            $table->foreign('kursus_id')->references('kursus_id')->on('kursus')->onDelete('cascade');
            $table->timestamps();
        });

        // Tabel pembayaran
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('pembayaran_id');
            $table->unsignedBigInteger('pendaftaran_id')->nullable();
            $table->date('tgl_pembayaran');
            $table->enum('metode_pembayaran', ['Transfer Bank', 'Kartu Kredit', 'E-Wallet']); // Metode pembayaran dengan pilihan
            $table->decimal('jumlah', 10, 2);
            $table->enum('status', ['Pending', 'Berhasil', 'Gagal']);
            $table->foreign('pendaftaran_id')->references('pendaftaran_id')->on('pendaftaran')->onDelete('cascade');
            $table->timestamps();
        });

        // Tabel sertifikat
        Schema::create('sertifikat', function (Blueprint $table) {
            $table->id('sertifikat_id');
            $table->unsignedBigInteger('pendaftaran_id')->nullable();
            $table->unsignedBigInteger('kursus_id')->nullable();
            $table->string('nama_kursus');
            $table->string('file_sertifikat');
            $table->string('nomor_sertifikat');
            $table->date('tanggal_terbit');
            $table->foreign('pendaftaran_id')->references('pendaftaran_id')->on('pendaftaran')->onDelete('cascade')->nullable();
            $table->foreign('kursus_id')->references('kursus_id')->on('kursus')->onDelete('cascade');
            $table->timestamps();
        });

        // Tabel rating pelatih
        Schema::create('rating_pelatih', function (Blueprint $table) {
            $table->id('rating_pelatih_id');
            $table->unsignedBigInteger('pengguna_id');
            $table->float('rating');
            $table->text('komentar')->nullable();
            $table->timestamp('waktu')->default(now());
            $table->foreign('pengguna_id')->references('pengguna_id')->on('pengguna')->onDelete('cascade');
            $table->timestamps();
        });

        // Tabel umpan balik
        Schema::create('umpan_balik', function (Blueprint $table) {
            $table->id('umpan_balik_id');
            $table->string('nama_komentar');
            $table->text('komentar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('umpan_balik'); // Dropping umpan_balik table first
        Schema::dropIfExists('sertifikat');
        Schema::dropIfExists('pembayaran');
        Schema::dropIfExists('pendaftaran');
        Schema::dropIfExists('kurikulum');
        Schema::dropIfExists('kursus');
        Schema::dropIfExists('keahlian');
        Schema::dropIfExists('spesialisasi');
        Schema::dropIfExists('peserta');
        Schema::dropIfExists('pelatih');
        Schema::dropIfExists('rating_pelatih');
        Schema::dropIfExists('pengguna');
        Schema::dropIfExists('admin');
    }
}
