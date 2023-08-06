<?php

namespace Database\Seeders;

use App\Models\Pesan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pesan::create([
            'nama' => 'Prio',
            'judul' => "Tanya Sesuatu",
            'telpon' => '087234232123',
            'email' => 'prio@gmail.com',
            'deskripsi' => 'Tanya',
            'is_read' => 0
        ]);
    }
}
