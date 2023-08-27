<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $user = User::create([
//           'name'=>'super_admin',
//           'email'=>'super_admin@app.com',
//           'password'=>bcrypt('123456'),
//        ]);
//        $user->assignRole('admin');


        $user = User::create([
            'name'=>'super_admin',
            'email'=>'super_admin@app.com',
            'password'=>bcrypt('1234567'),
        ]);

        $role = Role::create(['name' => 'admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
