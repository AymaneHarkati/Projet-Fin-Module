<?php

namespace App\Http\Livewire;
use App\Models\Intervention;
use Livewire\Component;
use App\Models\Parcelle;
use App\Models\Employe;

class Interventions extends Component
{
    public $iterv,$emp_id,$par_id,$debut,$n_jour,$employe,$pr;
    public $updateMode = false;
    public $arr;
    public function render()
    {   $this->pr = Parcelle::all();
        $this->employe = Employe::all();
        $this->iterv = Intervention::all();
        return view('livewire.interventions.interventions');
    }

    private function resetInputFields(){
        $this->emp_id = '';
        $this->par_id = '';
        $this->debut = '';
        $this->n_jour = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'emp_id' => 'required',
            'par_id' => 'required',
            'debut' => 'required',
            'n_jour' => 'required'
        ]);

        Intervention::create($validatedDate);

        session()->flash('message', 'Intervention Created Successfully.');

        $this->resetInputFields();

        return redirect()->to('/dashboard?slug=5');
    }

    public function edit($emp_n,$par_n)
    {
        $pk = ['emp_id' => $emp_n, 'par_id' => $par_n];
        $this->updateMode = true;
        $emp = Intervention::where($pk)->first();
        $this->emp_id= $emp->emp_id;
        $this->par_id= $emp->par_id;
        $this->debut = $emp->debut;
        $this->n_jour = $emp->n_jour;
        $this->arr[0]=$emp_n;
        $this->arr[1]=$par_n;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }


    public function update()
    {
        $validatedDate = $this->validate([
            'emp_id' => 'required',
            'par_id' => 'required',
            'debut' => 'required',
            'n_jour' => 'required'

        ]);
        if ($this->arr[0] && $this->arr[1]) {
            $pk = ['emp_id' => $this->arr[0], 'par_id' => $this->arr[1]];
            $parcs = Intervention::where($pk);
            $parcs->update([
                'emp_id' => $this->emp_id,
                'par_id' => $this->par_id,
                'debut' => $this->debut,
                'n_jour' => $this->n_jour
            ]);
            unset($this->arr);
            $this->updateMode = false;
            session()->flash('message', 'Intervention Updated Successfully.');
            $this->resetInputFields();
            return redirect()->intended('home');

        }
    }

    public function delete($emp_n,$par_n)
    {
        $pk = ['emp_id' => $emp_n, 'par_id' => $par_n];
        if($emp_n){
            Intervention::where($pk)->delete();
            session()->flash('message', 'Parcelle Deleted Successfully.');
        }
		return  redirect('/dashboard?slug=5')->with('num',$value = 5);;
    }
}
