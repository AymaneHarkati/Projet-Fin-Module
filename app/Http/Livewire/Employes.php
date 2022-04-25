<?php

namespace App\Http\Livewire;
use App\Models\Employe;
use App\Models\Tarif;
use Livewire\Component;

class Employes extends Component
{
    public $emp,$emp_nss,$nom,$prenom,$tarif;
    public $updateMode = false;
    protected $rules = [
        'tarif' => 'required'
    ];
    public function render()
    {   $this->tarif = Tarif::all();
        $this->emp = Employe::all();
        return view('livewire.employes.employes');
    }

    private function resetInputFields(){
        $this->emp_nss = '';
        $this->nom = '';
        $this->prenom = '';
        $this->tarif = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'emp_nss' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'tarif' => 'required'
        ]);
        if(Tarif::where('description',$this->tarif)){
        Employe::create($validatedDate);

        session()->flash('message', 'Employe Created Successfully.');

        $this->resetInputFields();

        return redirect()->to('/dashboard?slug=4');}
        else{
            ddd("tarif entred, doesn't exist.");
        }
    }

    public function edit($emp_n)
    {
        $this->updateMode = true;
        $emp = Employe::where('emp_nss',$emp_n)->first();
        $this->emp_nss= $emp_n;
        $this->nom = $emp->nom;
        $this->prenom = $emp->prenom;
        $this->tarif = $emp->tarif;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedDate = $this->validate([
            'emp_nss' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'tarif' => 'required'

        ]);

        if ($this->id) {
            $parcs = Employe::find($this->id);
            $parcs->update([
                'emp_nss' => $this->emp_nss,
                'nom' => $this->nom,
                'prenom' => $this->prenom,
                'tarif' => $this->tarif
            ]);
            $this->updateMode = false;
            session()->flash('message', 'employe Updated Successfully.');
            $this->resetInputFields();

        }
    }

    public function delete($emp_n,$nom,$prenom,$tarif,$table)
    {
        if($emp_n){
            Employe::where('emp_nss',$emp_n)->delete();
            session()->flash('message', 'Parcelle Deleted Successfully.');
        }
		return  view('dashboard')->with('num',$value = 4);
    }
}
