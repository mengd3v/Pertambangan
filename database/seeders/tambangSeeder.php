<?php

namespace Database\Seeders;

use App\Models\Tambang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tambangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tambang::create([
            'nama'=> 'Tambang A',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, debitis',
            'lokasi' => 'Blok A, Gang 1'
        ]);
        Tambang::create([
            'nama'=> 'Tambang B',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, debitis',
            'lokasi' => 'Blok B, Gang 1'
        ]);
        Tambang::create([
            'nama'=> 'Tambang C',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, debitis',
            'lokasi' => 'Blok C, Gang 1'
        ]);
        Tambang::create([
            'nama'=> 'Tambang D',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, debitis',
            'lokasi' => 'Blok A, Gang 2'
        ]);
        Tambang::create([
            'nama'=> 'Tambang E',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, debitis',
            'lokasi' => 'Blok B, Gang 2'
        ]);
        Tambang::create([
            'nama'=> 'Tambang F',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, debitis',
            'lokasi' => 'Blok C, Gang 2'
        ]);
    }
}
