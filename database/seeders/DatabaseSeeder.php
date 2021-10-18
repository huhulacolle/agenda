<?php

namespace Database\Seeders;

use App\Models\devoir;
use App\Models\matiere;
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

        // pour le debug
        // devoir::insert(array(
        //     array(
        //         'nom' => 2,
        //         'devoir' => 'DM',
        //         'date' => date('Y-m-d', strtotime('+10 days'))
        //     )
        // ));

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
                'prof' => 'Rakouchy'
            ),
        ));
    }
}
