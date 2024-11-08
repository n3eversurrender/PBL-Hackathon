<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Panggil semua seeder yang telah dibuat
        $this->call([
            AdminTableSeeder::class,
            PenggunaSeeder::class,
            PelatihSeeder::class,
            SpesialisasiSeeder::class,
            PesertaSeeder::class,
            KeahlianSeeder::class,
            KursusSeeder::class,
            KurikulumSeeder::class,
            PendaftaranSeeder::class,
            PembayaranSeeder::class,
            SertifikatSeeder::class,
            RatingPelatihSeeder::class,
        ]);
    }
}
