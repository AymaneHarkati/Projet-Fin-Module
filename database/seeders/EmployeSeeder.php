<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emp=
        [   ['emp_nss'=>'165070712345678','nom'=>'pernet','prenom'=>'Henri','tarif'=>'super special'],
        ['emp_nss'=>'175070712345678','nom'=>'Grandet','prenom'=>'Marc','tarif'=>'normal'],
        ['emp_nss'=>'280050512345678','nom'=>'Barnier','prenom'=>'Nicole','tarif'=>'special'],

        ];

        DB::table('employes')->insert($emp);
    }
}
