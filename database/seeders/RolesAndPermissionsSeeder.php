<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $userRole = Role::create(['name' => 'user']);

        //  permissions
        // $permission = Permission::create(['name' => 'edit articles']);
        // $role->givePermissionTo($permission);

        // Alternatively, you can directly assign roles to users here
    }
}
