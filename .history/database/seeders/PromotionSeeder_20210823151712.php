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
                'name' => 'No promotion',
                'start_date' => now(),
                'end_date' => '9999-12-31 23:59:59',
                'number' => 0,
                ''
                'created_at' => now(),
            ]
        ]);
    }
}
