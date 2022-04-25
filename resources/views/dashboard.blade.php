<x-app-layout>
    <x-slot name="header" x-data="{ open: false }">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if (Auth::user()->role == 'user')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-black-800" style="background-color: #b1bfd8;
                    background-image: linear-gradient(315deg, #b1bfd8 0%, #6782b4 74%);">
                        User Dashboard!
                        @if ($num == '0')
                            <livewire:user-table>
                        @endif
                        @if ($num == '1')
                            <livewire:agriculteur-table>
                        @endif
                        @if ($num == '2')
                            <livewire:parcelle-table>
                        @endif
                        @if ($num == '3')
                            <livewire:tarif-table>
                        @endif
                        @if ($num == '4')
                            <livewire:employe-table>
                        @endif
                        @if ($num == '5')
                            <livewire:intervention-table>
                        @endif
                        @if ($num == '6')
                            <livewire:tables>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @elseif (Auth::user()->role == 'admin')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-gray-200 text-white" style="background-color: #90d5ec;
                    background-image: linear-gradient(315deg, #90d5ec 0%, #fc575e 74%);
                    ">
                    Admin Dashboard
                        @if ($num == '0')
                            <livewire:user-table>
                        @endif
                        @if ($num == '1')
                            <livewire:agriculteur-table>
                                <livewire:agriculteurs>
                        @endif
                        @if ($num == '2')
                            <livewire:parcelle-table>
                                <livewire:parcelles>
                        @endif
                        @if ($num == '3')
                            <livewire:tarif-table>
                                <livewire:tarifs>
                        @endif
                        @if ($num == '4')
                            <livewire:employe-table>
                                <livewire:employes>
                        @endif
                        @if ($num == '5')
                            <livewire:intervention-table>
                                <livewire:interventions>
                        @endif
                        @if ($num == '6')
                            <livewire:tables>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @elseif (Auth::user()->role == 'manager')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 text-white" style="background-color: #f8ceec;
                    background-image: linear-gradient(315deg, #f8ceec 0%, #a88beb 74%);
                    ">
                    Manager Dashboard
                        @if ($num == '1')
                            <livewire:agriculteur-table>
                                <livewire:agriculteurs>
                        @endif
                        @if ($num == '2')
                            <livewire:parcelle-table>
                                <livewire:parcelles>
                        @endif
                        @if ($num == '3')
                            <livewire:tarif-table>
                                <livewire:tarifs>
                        @endif
                        @if ($num == '4')
                            <livewire:employe-table>
                                <livewire:employes>
                        @endif
                        @if ($num == '5')
                            <livewire:intervention-table>
                                <livewire:interventions>
                        @endif
                        @if ($num == '6')
                            <livewire:tables>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
