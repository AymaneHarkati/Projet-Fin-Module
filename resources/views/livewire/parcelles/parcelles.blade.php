<div class="w-full max-w-lg">
    <form class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 mt-2">
                <input type="hidden" wire:model="user_id">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                    for="exampleFormControlInput1">Nom</label>
                <input type="text"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    wire:model="nom" id="exampleFormControlInput1" placeholder="Entrer Nom">
                @error('nom')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="exampleFormControlInput2">Lieu</label>
                <input type="text"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    wire:model="lieu" id="exampleFormControlInput2" placeholder="Entrer Lieu">
                @error('Lieu')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label for="exampleFormControlInput2"
                    class="block uppercase tracking-wide text-white text-xs font-bold mb-2">Superficie</label>
                <input type="text"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    wire:model="superficie" id="exampleFormControlInput2" placeholder="Entrer Superficie">
                @error('Sup')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label for="exampleFormControlInput2"
                    class="block uppercase tracking-wide text-white text-xs font-bold mb-2">N_owner</label>
                <select wire:model="prop_id"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="exampleFormControlInput3" name="user">
                    @foreach ($agr as $value)
                        <option value="{{ $value->id }}">{{ $value->id }}</option>
                    @endforeach
                </select>
                @error('Owner')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button wire:click.prevent="store()" class="bg-orange-200 px-3 mt-2 text-white ">Save</button>
    </form>
