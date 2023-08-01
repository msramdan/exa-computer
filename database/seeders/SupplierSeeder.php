<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::create([
            'kode_supplier' => 'SUP-001',
            'nama' => 'PT E MEDIA DEVICE',
            'alamat' => 'Yogyakarta',
            'email' => 'marketing@emd.co.id',
            'telpon' => '081901600029'
        ]);
    }
}
