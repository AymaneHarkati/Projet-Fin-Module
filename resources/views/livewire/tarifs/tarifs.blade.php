<div class="w-full max-w-lg">
    <form class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 mt-2">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                    for="exampleFormControlInput1">Prix</label>
                <input type="text"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    wire:model="euro" id="exampleFormControlInput1" placeholder="Entrer Prix">
                @error('euro')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                    for="exampleFormControlInput2">description</label>
                <input type="text"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    wire:model="description" id="exampleFormControlInput2" placeholder="Entrer description">
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button wire:click.prevent="store()" class="bg-orange-200 px-3 mt-2 text-white ">Save</button>
    </form>
