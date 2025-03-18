<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #permisos
        Permission::create(['name'=>'ver usuarios']);
        Permission::create(['name'=>'crear usuarios']);
        Permission::create(['name'=>'editar  usuarios']);
        Permission::create(['name'=>'eliminar usuarios']);

        Permission::create(['name'=>'ver productos']);
        Permission::create(['name'=>'crear productos']);
        Permission::create(['name'=>'editar productos']);
        Permission::create(['name'=>'eliminar productos']);

        #roles

        $adminUser = User::query()->create([ #creamos un usuario
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>'#Lemure27',
            'email_verified_at'=> now()
        ]);
        $roleAdmin = Role::create(['name'=>'super-admin']);#creamos un role
        $adminUser->assignRole($roleAdmin); #asignamos el role al usuario
        $permissionsAdmin = Permission::query()->pluck('name'); #le asignamos los permisos a una variable $permissionsAdmin
        $roleAdmin->syncPermissions($permissionsAdmin); #ligamos los permisos con el roleAdmin


        #creando un usuario estudiante y asignandole rol y permisos 
        $studenUser = User::query()->create([
            'name'=>'student',
            'email'=>'student@student.com',
            'password'=>'#Lemure27',
            'email_verified_at'=> now()
        ]);

        $roleStudent = Role::create(['name'=>'student']);
        $studenUser->assignRole($roleStudent);
        $roleStudent->syncPermissions('ver productos');




    }
}
