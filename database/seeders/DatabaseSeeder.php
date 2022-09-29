<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        // \App\Models\Admin::factory(5)->create();

        \App\Models\User::create([
            'name' => 'User Test',
            'email' => 'usertest@gmail.com',
            'password' => Hash::make('12341234'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        \App\Models\Admin::create([
            'name' => 'Admin Test',
            'username' => 'AdminTest',
            'email' => 'admintest@gmail.com',
            'password' => Hash::make('12341234'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $this->call([
            sewaSeeder::class,
            kendaraanSeeder::class,
            garasiSeeder::class,
            pemakaianSeeder::class,
            pengembalianSeeder::class
        ]);
    }
}
