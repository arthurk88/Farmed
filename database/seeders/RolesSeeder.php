<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (['Master', 'Admin', 'Gestor','Moderador', 'Usuario'] as $key){
            Role::create([
                'name' => $key
            ]);
        }

        // Master
        $roles = Role::findByName('Master');
        $roles->givePermissionTo('Menu.*');
        $roles->givePermissionTo('View.*');

        // Admin
        $roles = Role::findByName('Admin');
        $roles->givePermissionTo('Menu.*');
        $roles->givePermissionTo('View.*');

        // Gerente
        $roles = Role::findByName('Gestor');
        $roles->givePermissionTo('View.Dashboard');

        // Usuario
        $roles = Role::findByName('Usuario');
        $roles->givePermissionTo('View.Dashboard');
    }
}
