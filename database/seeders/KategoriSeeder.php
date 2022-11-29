<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'namaKategori' => "Dewasa",
            'descKategori' => "Jamu untuk usia dewasa",
        ]);
        Kategori::create([
            'namaKategori' => "Remaja",
            'descKategori' => "Jamu untuk usia remaja",
        ]);
        Kategori::create([
            'namaKategori' => "Anak-anak",
            'descKategori' => "Jamu untuk usia anak-anak",
        ]);
    }
}
