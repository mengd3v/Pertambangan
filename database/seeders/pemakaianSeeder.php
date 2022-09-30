<?php

namespace Database\Seeders;

use App\Models\Pemakaian;
use App\Models\Tambang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class pemakaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pemakaian::create([
            'kendaraan_id' => 1,
            'user_id' => 1,
            'garasi_id' => 1,
            'driver' => 'samsul',
            'waktu' => Carbon::now()->subDay(),
            'status' => 'accAdmin'
        ]);

        Pemakaian::create([
            'kendaraan_id' => 2,
            'user_id' => 1,
            'garasi_id' => 1,
            'driver' => 'joko',
            'waktu' => Carbon::now()->subHours(5),
            'status' => 'accPengelola'
        ]);

        Pemakaian::create([
            'kendaraan_id' => 3,
            'user_id' => 1,
            'garasi_id' => 2,
            'driver' => 'susilo',
            'waktu' => Carbon::now()->subHours(5),
            'status' => 'belum'
        ]);
    }
}
