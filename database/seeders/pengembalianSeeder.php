<?php

namespace Database\Seeders;

use App\Models\Pengembalian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class pengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengembalian::create([
            'pemakaian_id' => 1,
            'user_id' => 1,
            'garasi_id' => 1,
            'waktu' => Carbon::now()
        ]);
    }
}
