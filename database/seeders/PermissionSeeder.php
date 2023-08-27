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




        $permissions = [
            'categories-edit',
            'categories-delete',
            'categories-list',
            'categories-create',
            'categories-show',
            'role-edit',
            'role-delete',
            'role-list',
            'role-create',
            'role-show',
            'users-edit',
            'users-delete',
            'users-list',
            'users-create',
            'users-show',
            'movies-edit',
            'movies-delete',
            'movies-list',
            'movies-create',
            'movies-show',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }


//
//        Permission::create(['name' => 'categories-edit', 'guard_name' => 'user']);
//        Permission::create(['name' => 'categories-delete', 'guard_name' => 'user']);
//        Permission::create(['name' => 'categories-list', 'guard_name' => 'user']);
//        Permission::create(['name' => 'categories-create', 'guard_name' => 'user']);
//        Permission::create(['name' => 'categories-show', 'guard_name' => 'user']);
//
//        Permission::create(['name' => 'role-edit', 'guard_name' => 'user']);
//        Permission::create(['name' => 'role-delete', 'guard_name' => 'user']);
//        Permission::create(['name' => 'role-list', 'guard_name' => 'user']);
//        Permission::create(['name' => 'role-create', 'guard_name' => 'user']);
//        Permission::create(['name' => 'role-show', 'guard_name' => 'user']);
//
//        Permission::create(['name' => 'users-edit', 'guard_name' => 'user']);
//        Permission::create(['name' => 'users-delete', 'guard_name' => 'user']);
//        Permission::create(['name' => 'users-list', 'guard_name' => 'user']);
//        Permission::create(['name' => 'users-create', 'guard_name' => 'user']);
//        Permission::create(['name' => 'users-show', 'guard_name' => 'user']);
//
//        Permission::create(['name' => 'movies-edit', 'guard_name' => 'user']);
//        Permission::create(['name' => 'movies-delete', 'guard_name' => 'user']);
//        Permission::create(['name' => 'movies-list', 'guard_name' => 'user']);
//        Permission::create(['name' => 'movies-create', 'guard_name' => 'user']);
//        Permission::create(['name' => 'movies-show', 'guard_name' => 'user']);
//

    }
}
