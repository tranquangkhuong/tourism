<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AboutSeeder::class,
            AdminSeeder::class,
            AreaSeeder::class,
            AttributeSeeder::class,
            LocationSeeder::class,
            PermissionSeeder::class,
            PromotionSeeder::class,
            TagSeeder::class,
            UserSeeder::class,
            VehicleSeeder::class,
        ]);
    }
}
