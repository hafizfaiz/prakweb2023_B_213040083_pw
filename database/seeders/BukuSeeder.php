<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bukus')->insert([
            "judul" => "Bulan",
            "harga" => "2000000",
            "jumlah_halaman" => "300",
            "tanggal_terbit" => "2014-11-14",
            "penerbit" => "Gramedia",
            "penulis" => "Tere Liye",
            "img" => "bulan.jpg",
        ]);
    }
}
