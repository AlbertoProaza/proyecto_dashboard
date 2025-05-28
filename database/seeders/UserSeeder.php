<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear usuario administrador
        $admin = User::create([
            'name' => 'Administrador',
            'email' => 'admin@dashboard.com',
            'password' => Hash::make('password'),
            'role_id' => Role::where('name', 'admin')->first()->id,
        ]);

        // Asignar rol admin
        $admin->assignRole('admin');

        // Crear usuario normal de ejemplo
        $user = User::create([
            'name' => 'Usuario Ejemplo',
            'email' => 'usuario@dashboard.com',
            'password' => Hash::make('password'),
            'role_id' => Role::where('name', 'usuario')->first()->id,
        ]);

        // Asignar rol usuario
        $user->assignRole('usuario');
    }
}
