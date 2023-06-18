<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Administrative permission
        Permission::create(['name' => 'publish book']);
        Permission::create(['name' => 'edit book']);
        Permission::create(['name' => 'delete book']);
        // Permission::create(['name' => 'unpublish book']);

        // Guest permission
        Permission::create(['name' => 'borrow book']);
        Permission::create(['name' => 'return book']);

        // Create roles and assign created permissions

        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo(['borrow book', 'return book']);
 
        $role = Role::create(['name' => 'librarian']);
        $role->givePermissionTo(Permission::all());
    }
}
