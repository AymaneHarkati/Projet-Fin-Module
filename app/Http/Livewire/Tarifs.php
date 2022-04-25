<?php

namespace App\Http\Livewire;
use App\Models\Tarif;
use Livewire\Component;

class Tarifs extends Component
{
    public $tarif,$euro,$description;
    public $updateMode = false;

    public function render()
    {
        $this->tarif = Tarif::all();
        return view('livewire.tarifs.tarifs');
    }

    private function resetInputFields(){
        $this->euro = '';
        $this->description = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'euro' => 'required',
            'description' => 'required',
        ]);

        Tarif::create($validatedDate);

        session()->flash('message', 'Tarif Created Successfully.');

        $this->resetInputFields();

        return redirect()->to('/dashboard?slug=3');
    }

    public function edit($desc)
    {
        $this->updateMode = true;
        $tarif = Tarif::where('description',$desc)->first();
        $this->description = $tarif->description;
        $this->euro = $tarif->euro;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedDate = $this->validate([
            'euro' => 'required',
            'description' => 'required',
        ]);

        if ($this->description) {
            $tarif = Tarif::find($this->description);
            $tarif->update([
                'euro' => $this->euro,
                'description' => $this->description,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Tarif Updated Successfully.');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            Tarif::where('description',$id)->delete();
            session()->flash('message', 'Tarif Deleted Successfully.');
        }
		return redirect('/dashboard?slug=3')->with('num',$value = 3);
    }

}
