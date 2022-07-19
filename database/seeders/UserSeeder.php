<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User;
        $user1->name = 'Pedro Pablo Pérez Perea';
        $user1->email = 'pppp@mail.com';
        $user1->password = 'Pepe123';
        $user1->rol = 'Ingeniero de soporte';
        $user1->save();

        $user2 = new User;
        $user2->name = 'Juan Jaime Jaramillo';
        $user2->email = 'jjj@mail.com';
        $user2->password = 'Jota123';
        $user2->rol = 'Auxiliar de mantenimiento';
        $user2->save();
    }
}
