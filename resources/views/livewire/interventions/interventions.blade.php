<div class="w-full max-w-lg">
    <form class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 mt-2">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                    for="exampleFormControlInput1">No.Emp</label>
                <select wire:model="emp_id"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="exampleFormControlInput3" name="user">
                    @foreach ($employe as $value)
                        <option value="{{ $value->emp_nss }}">{{ $value->emp_nss}}</option>
                    @endforeach
                </select>
                @error('Emp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                    for="exampleFormControlInput2">N.Parcelle</label>
                <select wire:model="par_id"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="exampleFormControlInput3" name="user">
                    @foreach ($pr as $value)
                        <option value="{{ $value->id }}">{{ $value->id }}</option>
                    @endforeach
                </select>
                @error('Parc')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                    for="exampleFormControlInput2">Debut</label>
                <input type="text"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    wire:model="debut" id="exampleFormControlInput2" placeholder="Entrer Date Debut">
                @error('Sup')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                    for="exampleFormControlInput2">N.jour</label>
                <input type="text"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    class="form-control" wire:model="n_jour" id="exampleFormControlInput2"
                    placeholder="Entrer Nombre de Jour">
                @error('Owner')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button wire:click.prevent="store()" class="bg-orange-200 px-3 mt-2 text-white ">Save</button>
    </form>
