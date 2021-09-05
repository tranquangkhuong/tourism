<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@mail.xxx',
                'password' => Hash::make('12345'),
                'created_at' => now(),
            ]
        ]);
    }
}
