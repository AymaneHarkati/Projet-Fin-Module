<div class="w-full max-w-lg">
    <form class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 mt-2">
                <input type="hidden" wire:model="user_id">
                <label for="exampleFormControlInput1"
                    class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                    for="exampleFormControlInput1">Nom</label>

                <input type="text"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    wire:model="nom" id="exampleFormControlInput1"
                    placeholder="Entrer Nom">

                @error('nom')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label
                    class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                    for="exampleFormControlInput2">prenom</label>
                <input type="text"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    wire:model="prenom" id="exampleFormControlInput2"
                    placeholder="Entrer Prenom">
                @error('prenom')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
                <div class="w-full md:w-1/2 px-3 mt-2">
                    <label
                        class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                        for="exampleFormControlInput2">adresse</label>
                    <input type="text"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        wire:model="adresse" id="exampleFormControlInput2"
                        placeholder="Entrer Adresse">
                    @error('Adresse')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            <button wire:click.prevent="store()"
                class="bg-orange-200 px-3 mt-2 text-white "
                type="button">Save</button>
