<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin Yusuf',
            'email' => 'yusuf@fic16.com',
            'password'=> Hash::make('12345678')
        ]);

        Company::create([
            'name' => 'PT. Arda FaceTracking',
            'email' => 'muhammad.ardabili79@gmail.com',
            'address' => 'Jl. Balai Desa, RT 01 RW 03, Randegan, Kebasen, Banyumas',
            'latitude' => '-7.747033',
            'longitude' => '110.355398',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);
    }
}
