<?php

namespace Database\Seeders;

use App\Models\Sewa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class sewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sewa::create([
            'perusahaan' => 'sirental',
            'tanggal_mulai' => Carbon::today()->subDays(6)->toDateString(),
            'tanggal_selesai' => Carbon::today()->addDays(30)->toDateString()
        ]);
        Sewa::create([
            'perusahaan' => 'sirental',
            'tanggal_mulai' => Carbon::today()->subDays(10)->toDateString(),
            'tanggal_selesai' => Carbon::today()->addDays(20)->toDateString()
        ]);
    }
}
