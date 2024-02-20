<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight">
            {{ $prof->nom  }} 
        </h2>
    </x-slot>

    <div class="py-2 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="flex flex-col space-y-2 bg-white dark:bg-gray-900 overflow-hidden shadow-md p-4 sm:rounded-lg">
                 <div> @livewire('profs-classes',['ids'=> $prof->id])</div> 
                 <div> @livewire('profs-classes-add')   </div> 
                 <div> @livewire('profs-classes-edit')   </div> 
                 <div> @livewire('profs-classes-del')   </div> 
            </div>
        </div>
    </div>
</x-app-layout>