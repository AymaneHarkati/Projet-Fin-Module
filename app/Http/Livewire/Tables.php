<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Tables extends Component
{
    public function render()
    {
        $this->q1 = DB::table('agriculteurs')
            ->select('nom')
            ->orderBy('nom')
            ->get();
        $this->q2 = DB::table('parcelles')
            ->select('nom')
            ->where('superficie' , '>' , '500')
            ->get();

        $this->q3 = DB::table('parcelles')
            ->select('*')
            ->whereBetween('superficie' ,['300' , '500'])
            ->where('Lieu' , '=' , 'Arith')
            ->get();

        $this->q4 = DB::table('parcelles')
            ->join('agriculteurs' ,'parcelles.prop_id' ,'=','agriculteurs.id')
            ->select('agriculteurs.nom as agrname','parcelles.*')
            ->get();
        $from = date('2011-11-07');
        $to = date('2012-02-09');

        $this->q5 = DB::table('interventions')
            ->select('*')
            ->whereBetween('debut',[$from,$to])
            ->get();

        $this->q6 = DB::table('interventions')
            ->join('parcelles' ,'parcelles.id' ,'=','interventions.par_id')
            ->select('parcelles.nom','interventions.*')
            ->get();

        $this->q7 = DB::table('interventions')
            ->join('parcelles' ,'parcelles.id' ,'=','interventions.par_id')
            ->join('agriculteurs' ,'parcelles.prop_id' ,'=','agriculteurs.id')
            ->select('parcelles.nom as prname','interventions.*','agriculteurs.nom as agrname')
            ->get();

        $this->q8 = DB::table('interventions')
            ->join('employes' ,'employes.emp_nss' ,'=','interventions.emp_id')
            ->where('employes.nom','=','Pernet')
            ->select('employes.nom','interventions.*')
            ->get();

        $this->q9 = DB::table('parcelles')
            ->sum('superficie');

        $this->max = DB::table('parcelles')
        ->max('superficie');

        $this->min = DB::table('parcelles')
        ->min('superficie');

        $this->q10 = DB::table('parcelles')
            ->where('superficie','=',$this->max)
            ->select('nom')
            ->get();

        $this->q11 = DB::table('parcelles')
            ->where('superficie','=',$this->min)
            ->select('nom')
            ->get();

        return view('livewire.tables');
    }
}
