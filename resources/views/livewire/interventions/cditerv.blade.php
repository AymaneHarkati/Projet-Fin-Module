<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">No.Emp</label>
        <input type="text" class="form-control" wire:model="emp_id" id="exampleFormControlInput1" placeholder="Entrer Numero Emp">
        @error('Emp') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">N.Parcelle</label>
        <input type="text" class="form-control" wire:model="par_id" id="exampleFormControlInput2" placeholder="Entrer Numero Parcelle">
        @error('Parc') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Debut</label>
        <input type="text" class="form-control" wire:model="debut" id="exampleFormControlInput2" placeholder="Entrer Date Debut">
        @error('Sup') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">N.jour</label>
        <input type="text" class="form-control" wire:model="n_jour" id="exampleFormControlInput2" placeholder="Entrer Nombre de Jour">
        @error('Owner') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
