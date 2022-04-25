<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Agriculteur;

class Agriculteurs extends Component
{
    public $users, $nom, $prenom, $adresse;
    public $updateMode = false;

    public function render()
    {
        $this->users = Agriculteur::all();
        return view('livewire.agriculteurs.agriculteurs');
    }

    private function resetInputFields(){
        $this->nom = '';
        $this->prenom = '';
        $this->adresse = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required'
        ]);

        Agriculteur::create($validatedDate);

        session()->flash('message', 'Agriculteurs Created Successfully.');

        $this->resetInputFields();

        return redirect()->to('/dashboard?slug=1');
    }
    public function edit($id)
    {
        $this->updateMode = true;
        $user = Agriculteur::where('id',$id)->first();
        $this->user_id = $id;
        $this->nom = $user->nom;
        $this->prenom = $user->prenom;
        $this->adresse = $user->adresse;

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
            'prenom' => 'required',
            'adresse' => 'required'
        ]);

        if ($this->user_id) {
            $user = Agriculteur::find($this->user_id);
            $user->update([
                'name' => $this->nom,
                'prenom' => $this->prenom,
                'adresse' => $this->adresse
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Agriculteurs Updated Successfully.');
            $this->resetInputFields();

        }
    }

    public function delete($id,$nom,$prenom)
    {
        if($id){
            Agriculteur::where('id',$id)->delete();
            session()->flash('message', 'Agriculteurs Deleted Successfully.');
        }
		return redirect('/dashboard?slug=1')->with('num',$value=1);
    }

}
