<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'roles.index'])->syncRoles(['admin']);
        Permission::create(['name' => 'roles.store'])->syncRoles(['admin']);
        Permission::create(['name' => 'roles.show'])->syncRoles(['admin']);
        Permission::create(['name' => 'roles.update'])->syncRoles(['admin']);
        Permission::create(['name' => 'roles.delete'])->syncRoles(['admin']);
        
        Permission::create(['name' => 'permissions.index'])->syncRoles(['admin']);
        Permission::create(['name' => 'permissions.store'])->syncRoles(['admin']);
        Permission::create(['name' => 'permissions.show'])->syncRoles(['admin']);
        Permission::create(['name' => 'permissions.update'])->syncRoles(['admin']);
        Permission::create(['name' => 'permissions.delete'])->syncRoles(['admin']);

        Permission::create(['name' => 'users.index'])->syncRoles(['admin']);
        Permission::create(['name' => 'users.store'])->syncRoles(['admin']);
        Permission::create(['name' => 'users.show'])->syncRoles(['admin']);
        Permission::create(['name' => 'users.update'])->syncRoles(['admin']);
        Permission::create(['name' => 'users.delete'])->syncRoles(['admin']);
    }
}
