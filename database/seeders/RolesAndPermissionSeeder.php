<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset cached roles and permission
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit_post']);
        Permission::create(['name' => 'create_post']);
        Permission::create(['name' => 'delete_post']);
        Permission::create(['name' => 'approve_post']);
        Permission::create(['name' => 'disapprove_post']);

        //create Roles and assign created permission to roles
        $role1 = Role::create(['name'=>'author'])->givePermissionTo(['edit_post','create_post','delete_post']);
        $role2 = Role::create(['name'=>'admin'])->givePermissionTo(Permission::all());
        $role3 = Role::create(['name'=>'Super-Admin']);

        \App\Models\User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@example.com',
            'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole($role2);

        \App\Models\User::factory()->create([
            'name' => 'Test writer',
            'email' => 'writer@example.com',
            'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole($role1);

        \App\Models\User::factory()->create([
            'name' => 'Test super Admin',
            'email' => 'test@example.com',
            'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole($role3);
    }
}
