<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParcelleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $terre=
        [   ['nom'=>'Le Pre au Vent','lieu'=>'Arith','superficie'=>350,'prop_id'=>1],
            ['nom'=>'Le grand Verger','lieu'=>'Arith','superficie'=>300,'prop_id'=>2],
            ['nom'=>'Plan des Bauges','lieu'=>'Montagary','superficie'=>220,'prop_id'=>1],
            ['nom'=>'Les Pres Rus','lieu'=>'Arith','superficie'=>750,'prop_id'=>4],
            ['nom'=>'Lafosse','lieu'=>'Montagary','superficie'=>600,'prop_id'=>1],
        ];

        DB::table('parcelles')->insert($terre);
    }
}
