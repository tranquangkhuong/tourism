<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@mail.xxx',
                'password' => Hash::make('12345'),
                'created_at' => now(),
            ]
        ]);
    }
}
