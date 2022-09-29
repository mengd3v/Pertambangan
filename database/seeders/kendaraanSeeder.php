<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kendaraan::create([
            'merk' => 'Toyota',
            'tipe' => 'A123',
            'jenis' => 'pengangkut orang',
            'nomor' => 'A 1234 BC',
            'sewa_id' => 1
        ]);
        Kendaraan::create([
            'merk' => 'Hino',
            'tipe' => 'E12',
            'jenis' => 'pengangkut barang',
            'nomor' => 'A 5678 BC',
            'sewa_id' => null
        ]);
        Kendaraan::create([
            'merk' => 'Toyota',
            'tipe' => 'A123',
            'jenis' => 'pengangkut orang',
            'nomor' => 'A 3232 BC',
            'sewa_id' => null
        ]);
        Kendaraan::create([
            'merk' => 'Hino',
            'tipe' => 'E12',
            'jenis' => 'pengangkut barang',
            'nomor' => 'A 1212 BC',
            'sewa_id' => 2
        ]);
    }
}
