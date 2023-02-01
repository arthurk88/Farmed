<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'Menu.*',
            'View.*',
            'View.Dashboard',
        ];
        foreach ($permissions as $key) {

            Permission::create([
                'name' => $key
            ]);
        }
    }
}
