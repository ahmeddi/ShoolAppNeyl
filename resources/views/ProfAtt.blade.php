<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800  dark:text-gray-100 leading-tight">
            {{ __('att.sj') }} - {{ app()->getLocale() == 'ar' ? $prof->nom : $prof->nomfr}}  
        </h2>
    </x-slot>

    <div class="py-2 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="flex flex-col gap-y-2  p-2 ">
                 @livewire('profs-att-list', ['prof' => $prof])
                 @livewire('profs-att-list-add', ['prof1' => $prof->id]) 
                 @livewire('profs-att-list-edit',)         
                 @livewire('profs-att-list-del')   
            </div>
        </div>
    </div>
</x-app-layout>