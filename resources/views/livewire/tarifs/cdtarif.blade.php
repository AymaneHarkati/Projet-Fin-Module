<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Prix</label>
        <input type="text" class="form-control" wire:model="euro" id="exampleFormControlInput1" placeholder="Entrer Prix">
        @error('euro') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">description</label>
        <input type="text" class="form-control" wire:model="description" id="exampleFormControlInput2" placeholder="Entrer description">
        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
