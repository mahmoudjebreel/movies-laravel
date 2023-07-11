<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        $permissions = [
//                'categories-edit',
//                'categories-delete',
//                'categories-list',
//                'categories-create',
//                'categories-show',
//                'role-edit',
//                'role-delete',
//                'role-list',
//                'role-create',
//                'role-show',
//                'user-edit',
//                'user-delete',
//                'user-list',
//                'user-create',
//                'user-show',
//            ];
//
//        foreach ($permissions as $permission) {
//            Permission::create(['name' => $permission]);
//            }







        Permission::create(['name' => 'categories-edit', 'guard_name' => 'user']);
        Permission::create(['name' => 'categories-delete', 'guard_name' => 'user']);
        Permission::create(['name' => 'categories-list', 'guard_name' => 'user']);
        Permission::create(['name' => 'categories-create', 'guard_name' => 'user']);
        Permission::create(['name' => 'categories-show', 'guard_name' => 'user']);

        Permission::create(['name' => 'role-edit', 'guard_name' => 'user']);
        Permission::create(['name' => 'role-delete', 'guard_name' => 'user']);
        Permission::create(['name' => 'role-list', 'guard_name' => 'user']);
        Permission::create(['name' => 'role-create', 'guard_name' => 'user']);
        Permission::create(['name' => 'role-show', 'guard_name' => 'user']);

        Permission::create(['name' => 'users-edit', 'guard_name' => 'user']);
        Permission::create(['name' => 'users-delete', 'guard_name' => 'user']);
        Permission::create(['name' => 'users-list', 'guard_name' => 'user']);
        Permission::create(['name' => 'users-create', 'guard_name' => 'user']);
        Permission::create(['name' => 'users-show', 'guard_name' => 'user']);
//
//        Permission::create(['name' => 'Create-Cities', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Edit-Cities', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Index-Cities', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Delete-Cities', 'guard_name' => 'admin']);
//
//        Permission::create(['name' => 'Create-Roles', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Edit-Roles', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Index-Roles', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Delete-Roles', 'guard_name' => 'admin']);
//
//        Permission::create(['name' => 'Create-Permissions', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Edit-Permissions', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Index-Permissions', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Delete-Permissions', 'guard_name' => 'admin']);
//
//        Permission::create(['name' => 'Create-Admin', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Edit-Admin', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Index-Admin', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Delete-Admin', 'guard_name' => 'admin']);
//
//        Permission::create(['name' => 'Create-Professional', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Edit-Professional', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Index-Professional', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Delete-Professional', 'guard_name' => 'admin']);
//
//        Permission::create(['name' => 'Create-Customer', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Edit-Customer', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Index-Customer', 'guard_name' => 'admin']);
//        Permission::create(['name' => 'Delete-Customer', 'guard_name' => 'admin']);
    }
}
