<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countAdmin = Admin::count();
        if (!$countAdmin) {
            // create admin account
        }
        Admin::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@mail.xxx',
                'password' => Hash::make('12345'),
                'created_at' => now(),
            ]
        ]);
    }
}
