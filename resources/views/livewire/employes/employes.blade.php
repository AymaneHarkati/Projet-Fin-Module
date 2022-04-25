<div class="w-full max-w-lg">
    <form class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 mt-2">
                <label for="exampleFormControlInput1"
                    class="block uppercase tracking-wide text-white text-xs font-bold mb-2">No.</label>
                <input type="text"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    wire:model="emp_nss" id="exampleFormControlInput1" placeholder="Entrer Numero Emp">
                @error('nom')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                    for="exampleFormControlInput2">Nom</label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="text" class="form-control" wire:model="nom" id="exampleFormControlInput2"
                    placeholder="Entrer Nom">
                @error('Lieu')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                    for="exampleFormControlInput3">Prenom</label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="text" class="form-control" wire:model="prenom" id="exampleFormControlInput3"
                    placeholder="Entrer Prenom">
                @error('Sup')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                    for="exampleFormControlInput2">Tarif</label>

                    <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="text"  wire:model="tarif" id="exampleFormControlInput3"
                    placeholder="Entrer Tarif">
                @error('Owner')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button wire:click.prevent="store()" class="bg-orange-200 px-3 mt-2 text-white ">Save</button>
