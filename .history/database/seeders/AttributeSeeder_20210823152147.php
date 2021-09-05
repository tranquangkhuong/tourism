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
                'email' => 'admin@mail.xxx',
                'password' => Hash::make('12345'),
                'created_at' => now(),
            ]
        ]);
    }
}
