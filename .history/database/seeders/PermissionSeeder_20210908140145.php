<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add Admin Role
        $adminRole = Role::where('name', config('roles.admin.roles'))->first();
        if (!$adminRole) {
            $adminRole = Role::create([
                'name' => config('roles.admin.roles.name'),
                'guard_name' => config('auth.guards.admin.name'),
            ]);
        }

        // Get new Admin Permission
        $newPermissions = $this->createAdminPermissions('roles.admin.permissions');
        Permission::insert($newPermissions);
        $adminRole->syncPermissions(config('roles.admin.permissions'));
    }

    /**
     * Get list new permission from file config/roles.php
     * @param string $config
     * @return array
     */
    private function createAdminPermissions(string $config)
    {
        $currentPermissions = Permission::get('name')->pluck('name')->toArray();
        $newPermissions = [];
        $configPermissions = config($config);
        foreach ($configPermissions as $configPermission) {
            if (!in_array($configPermission, $currentPermissions)) {
                $newPermissions[] = [
                    'name' => $configPermission,
                    'guard_name' => config('auth.guards.admin.name'),
                ];
            }
        }

        return $newPermissions;
    }
}
