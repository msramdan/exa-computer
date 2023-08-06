<?php

namespace Database\Seeders;

use App\Models\SettingToko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingTokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SettingToko::create([
            'nama_toko' => 'Exa Komputer',
            'logo' => '',
            'telpon' => '087881998145',
            'email' => 'exakomputerr@gmail.com',
            'alamat' => 'Jl. Tlogosari Raya Ruko Anda KAV 6',
            'deskripsi' => 'Toko Sparepart Laptop dan Komputer Semarang',
        ]);
    }
}
