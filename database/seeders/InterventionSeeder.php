<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class InterventionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $interven=
        [   ['Emp_id'=>'165070712345678','Par_id'=>1,'debut'=>Carbon::create('2011','12','14'),'N_jour'=>5],
            ['Emp_id'=>'165070712345678','Par_id'=>2,'debut'=>Carbon::create('2012','01','10'),'N_jour'=>3],
            ['Emp_id'=>'165070712345678','Par_id'=>5,'debut'=>Carbon::create('2011','01','20'),'N_jour'=>6],
            ['Emp_id'=>'175070712345678','Par_id'=>1,'debut'=>Carbon::create('2011','12','11'),'N_jour'=>3],
            ['Emp_id'=>'175070712345678','Par_id'=>2,'debut'=>Carbon::create('2012','01','10'),'N_jour'=>3],

        ];

        DB::table('interventions')->insert($interven);
    }
}
