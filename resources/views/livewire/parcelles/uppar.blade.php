<form>
    <div class="form-group">
        <input type="hidden" wire:model="user_id">
        <label for="exampleFormControlInput1">Nom</label>
        <input type="text" class="form-control" wire:model="nom" id="exampleFormControlInput1" placeholder="Entrer Nom">
        @error('nom') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Lieu</label>
        <input type="text" class="form-control" wire:model="lieu" id="exampleFormControlInput2" placeholder="Entrer Prenom">
        @error('Lieu') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Superficie</label>
        <input type="text" class="form-control" wire:model="superficie" id="exampleFormControlInput2" placeholder="Entrer Adresse">
        @error('Sup') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">N_owner</label>
        <input type="text" class="form-control" wire:model="prop_id" id="exampleFormControlInput2" placeholder="Entrer Adresse">
        @error('Owner') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>
