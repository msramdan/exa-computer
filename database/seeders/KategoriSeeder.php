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
            'nama_kategori' => 'Monitor'
        ]);
        Kategori::create([
            'nama_kategori' => 'CCTV'
        ]);
        Kategori::create([
            'nama_kategori' => 'Hardisk'
        ]);
        Kategori::create([
            'nama_kategori' => 'SSD'
        ]);
        Kategori::create([
            'nama_kategori' => 'Power Supply'
        ]);
        Kategori::create([
            'nama_kategori' => 'Casing PC'
        ]);
        Kategori::create([
            'nama_kategori' => 'RAM'
        ]);
        Kategori::create([
            'nama_kategori' => 'CPU Cooler'
        ]);
        Kategori::create([
            'nama_kategori' => 'Fan Case'
        ]);
        Kategori::create([
            'nama_kategori' => 'Aksesories'
        ]);
        Kategori::create([
            'nama_kategori' => 'Laptop'
        ]);
        Kategori::create([
            'nama_kategori' => 'Printer'
        ]);
    }
}
