<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $users = User::factory(10)->create();

       foreach($users as $user){
        $user->assignRole('Usuario');
       }
     

        User::create([
            'name' => 'Arthur Santana',
            'email' => 'Arthur.Santana@unifacemp.edu.br',
            'password' => bcrypt('F@rm3d_2022'),
        ])->assignRole('Master');

        User::create([
            'name' => 'Jônatas Moura',
            'email' => 'jonatas.moura@unifacemp.edu.br',
            'password' => bcrypt('facemp@123'),
        ])->assignRole('Master');

    }
}
