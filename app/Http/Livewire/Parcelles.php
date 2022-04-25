<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Parcelle;
use App\Models\Agriculteur;

class Parcelles extends Component
{
    public $parcs,$nom,$lieu,$superficie,$prop_id,$agr;
    public $updateMode = false;
    public function render()
    {   $this->agr = Agriculteur::all();
        $this->parcs = Parcelle::all();
        return view('livewire.parcelles.parcelles');
    }

    private function resetInputFields(){
        $this->nom = '';
        $this->lieu = '';
        $this->superficie = '';
        $this->prop_id = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'nom' => 'required',
            'lieu' => 'required',
            'superficie' => 'required',
            'prop_id' => 'required'
        ]);

        Parcelle::create($validatedDate);

        session()->flash('message', 'Parcelle Created Successfully.');

        $this->resetInputFields();

        return redirect()->to('/dashboard?slug=2');
    }

    public function edit($p_id)
    {
        $this->updateMode = true;
        $parcs = Parcelle::where('id',$p_id)->first();
        $this->id= $p_id;
        $this->nom = $parcs->nom;
        $this->lieu = $parcs->lieu;
        $this->superficie = $parcs->superficie;
        $this->prop_id = $parcs->prop_id;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedDate = $this->validate([
            'nom' => 'required',
            'lieu' => 'required',
            'superficie' => 'required',
            'prop_id' => 'required'

        ]);

        if ($this->id) {
            $parcs = Parcelle::find($this->id);
            $parcs->update([
                'nom' => $this->nom,
                'lieu' => $this->lieu,
                'superficie' => $this->superficie,
                'prop_id' => $this->prop_id
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Parcelle Updated Successfully.');
            $this->resetInputFields();

        }
    }

    public function delete($id,$nom,$superficie,$lieu)
    {
        if($id){
            Parcelle::where('id',$id)->delete();
            session()->flash('message', 'Parcelle Deleted Successfully.');
        }
		return redirect('/dashboard?slug=2')->with('num',$value = 2);
    }
}
