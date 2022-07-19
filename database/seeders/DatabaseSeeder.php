<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Device;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        
        $device1 = new Device;
        $device1->device = 'Monitor de Signos Vitales';
        $device1->brand = 'MedTech';
        $device1->model = 'MT2022';
        $device1->mtto = 2;
        $device1->save() ;

        $device2 = new Device;
        $device2->device = 'Tomógrafo';
        $device2->brand = 'Siemens';
        $device2->model = 'ST1500';
        $device2->mtto = 1;
        $device2->save() ;

        $device3 = new Device;
        $device3->device = 'Ecógrafo';
        $device3->brand = 'Mindray';
        $device3->model = 'M800';
        $device3->mtto = 3;
        $device3->save() ;


    }
}
