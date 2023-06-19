<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
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

        Author::factory()->has(
            Book::factory()->has(
                Category::factory()->count(3)
            )->count(5)
        )->count(20)->create();
    }
}
