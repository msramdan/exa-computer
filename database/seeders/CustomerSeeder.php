<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'nama' => 'Prio',
            'tanggal_lahir' => date('d-m-y'),
            'jenis_kelamin' => 'Laki Laki',
            'email' => 'prio@gmail.com',
            'telpon' => '087723452322',
            'password' => bcrypt('customer')
        ]);
    }
}
