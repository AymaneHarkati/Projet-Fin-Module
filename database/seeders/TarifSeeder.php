<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tar=
        [   ['euro'=>60,'description'=>'mi-temps'],
            ['euro'=>110,'description'=>'normal'],
            ['euro'=>115,'description'=>'special'],
            ['euro'=>119,'description'=>'super special']
        ];

        DB::table('tarifs')->insert($tar);
    }
}
