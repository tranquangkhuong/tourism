<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

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
            $admin = Admin::insert([
                [
                    'name' => 'super-admin',
                    'email' => 'superadmin@mail.xxx',
                    'password' => Hash::make('12345'),
                    'created_at' => now(),
                ]
            ]);
            // create role super-admin
            Role::create([
                config('roles.super_admin.roles'),
                'guard_name' => config('auth.guards.admin'),
            ]);
            // Assign role vao admin account
            $admin->assignRole(config('roles.super_admin.roles.name'));
        }
    }
}
