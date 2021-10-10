<?php

namespace Database\Seeders;

use App\Models\matiere;
use App\Models\table;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        table::insert(array(
            array(
                'nom'=> 'Matières',
            ),
            array(
                'nom'=> 'Devoirs',
            ),
        ));

        matiere::insert(array(
            array(
                'nom'=> 'Réseau',
                'prof' => 'LeChien/Vinci'
            ),
            array(
                'nom'=> 'App Mobile',
                'prof' => 'Vinci'
            ),
            array(
                'nom'=> 'Java',
                'prof' => 'Prudhomme'
            ),
            array(
                'nom'=> 'Système',
                'prof' => 'Larcher'
            ),
            array(
                'nom'=> 'CyberStructure',
                'prof' => 'Larcher'
            ),
        ));
    }
}
