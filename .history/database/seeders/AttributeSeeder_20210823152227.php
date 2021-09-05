<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attribute::insert([
            [
                'name' => 'include',
                'created_at' => now(),
            ], [
                'name' => 'not include',
                'created_at' => now(),
            ],
        ]);
    }
}
