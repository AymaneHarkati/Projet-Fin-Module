<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">No.</label>
        <input type="text" class="form-control" wire:model="emp_nss" id="exampleFormControlInput1" placeholder="Entrer Numero Emp">
        @error('nom') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Nom</label>
        <input type="text" class="form-control" wire:model="nom" id="exampleFormControlInput2" placeholder="Entrer Nom">
        @error('Lieu') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Prenom</label>
        <input type="text" class="form-control" wire:model="prenom" id="exampleFormControlInput2" placeholder="Entrer Prenom">
        @error('Sup') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Tarif</label>
        <input type="text" class="form-control" wire:model="tarif" id="exampleFormControlInput2" placeholder="Entrer Tarif description">
        @error('Owner') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
