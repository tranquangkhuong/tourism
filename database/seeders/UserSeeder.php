<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Admin',
                'email' => 'admin@mail.xxx',
                'password' => Hash::make('12345'),
                'phone' => '0123456789',
                'is_admin' => 1,
                'created_at' => now(),
            ], [
                'name' => 'user01',
                'email' => 'user01@mail.xxx',
                'password' => Hash::make('12345'),
                'phone' => '0123456788',
                'is_admin' => 0,
                'created_at' => now(),
            ]
        ];
        User::insert($data);
    }
}
