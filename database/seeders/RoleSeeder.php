<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear rol Admin con todos los permisos
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo(Permission::all());

        // Crear rol Usuario con permisos limitados
        $userRole = Role::create(['name' => 'usuario']);
        $userRole->givePermissionTo([
            'view_posts',
            'create_posts',
            'edit_posts',
            'delete_posts',
        ]);
    }
}
