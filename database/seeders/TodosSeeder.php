<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userJefe=User::create([
            'name' => 'jefe 1',
            'email' => 'jefe1@gmail.com',
            'password' => Hash::make('superjefe'),
            'tipo' => '1',

        ]);

         $userAdmin=User::create([
            'name' => 'admin 1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '2',

        ]);

          $userUsuario=User::create([
            'name' => 'usuario 1',
            'email' => 'usuario1@gmail.com',
            'password' => Hash::make('user'),
            'tipo' => '3',

        ]);
    }
}
