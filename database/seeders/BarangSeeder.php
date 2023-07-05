<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
            'kode_barang' => '01',
            'nama_barang' => 'Apel',
            'harga_barang' => '5000',
            'deskripsi_barang' => 'Apel Segar',
            'satuan_id' => 1
            ],
        ]);
    }
}
