<?php

namespace Database\Seeders;

use App\Models\Garasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class garasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Garasi::create([
            'nama'=> 'Garasi A',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, debitis',
            'lokasi' => 'Blok A, Gang 1'
        ]);
        Garasi::create([
            'nama'=> 'Garasi B',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, debitis',
            'lokasi' => 'Blok B, Gang 1'
        ]);
        Garasi::create([
            'nama'=> 'Garasi C',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, debitis',
            'lokasi' => 'Blok C, Gang 1'
        ]);
        Garasi::create([
            'nama'=> 'Garasi D',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, debitis',
            'lokasi' => 'Blok A, Gang 2'
        ]);
        Garasi::create([
            'nama'=> 'Garasi E',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, debitis',
            'lokasi' => 'Blok B, Gang 2'
        ]);
        Garasi::create([
            'nama'=> 'Garasi F',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, debitis',
            'lokasi' => 'Blok C, Gang 2'
        ]);
    }
}
