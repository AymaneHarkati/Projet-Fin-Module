<?php

namespace Database\Seeders;

use App\Models\Agriculteur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgriculteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agr =
        [['nom'=>'Dulhac','prenom'=>'Anne-Marie', 'adresse'=>'Arith'],

        ['nom'=>'Martoz','prenom'=>'Christian', 'adresse'=>'Montargy'],
        ['nom'=>'Carrez','prenom'=>'Francois', 'adresse'=>'Arith'],
        ['nom'=>'Ferrer','prenom'=>'Mariette', 'adresse'=>'Lenoyer'],
        ['nom'=>'Mernaz','prenom'=>'Francine', 'adresse'=>'Lescheraines'],
        ['nom'=>'Martoz','prenom'=>'Christian', 'adresse'=>'Lescheraines'],

        ];

        DB::table('agriculteurs')->insert($agr);
    }
}
