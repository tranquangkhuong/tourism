<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promotion::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@mail.xxx',
                'password' => Hash::make('12345'),
                'created_at' => now(),
            ]
        ]);
    }
}
