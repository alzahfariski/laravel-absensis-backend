<?php

namespace Database\Seeders;

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
            'name' => 'Alzah Dev',
            'email' => 'alzah@admin.com',
            'password' => Hash::make('12345678'),
        ]);

        //data dummy for company
        \App\Models\Company::create([
            'name' => 'PT Alfaefsa',
            'email' => 'alzah@Alfaefsa.com',
            'address' => 'JL Kayangan, Indonesia',
            'latitude' => '-3.7893504',
            'longitude' => '102.3057371',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);
    }
}
