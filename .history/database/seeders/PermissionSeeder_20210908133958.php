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
            $adminRole = Role::create(config('roles.admin.roles'));
        }

        // Get new Admin Permission
        $newPermissions = $this->getNewPermissions('roles.admin.permissions');
        Permission::create($newPermissions);
        $adminRole->syncPermissions(config('roles.admin.permissions'));
    }

    /**
     * Get list new permission from file config/roles.php
     * @param string $config
     * @return array
     */
    private function getNewPermissions(string $config): array
    {
        $currentPermissions = Permission::get('name')->pluck('name')->toArray();
        $newPermissions = [];
        $configPermissions = config($config);
        foreach ($configPermissions as $configPermission) {
            dd($configPermission);
            if (!in_array($configPermission, $currentPermissions)) {
                $newPermissions[] = [
                    'name' => $configPermission,
                    'guard_name' => config('auth.guards.admin.name'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }
        // $myFile = fopen('/home/khuong/Public/permission.txt', 'w');
        // fwrite($myFile, implode(',', $newPermissions));
        // fclose($myFile);

        return $newPermissions;
    }
}
