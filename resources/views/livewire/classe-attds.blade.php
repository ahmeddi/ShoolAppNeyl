<div>
    <div class=" my-2 w-full flex flex-col lg:flex-row gap-y-1  justify-between items-center ">
        <div class= "flex my-1 w-full justify-start">
            <button wire:click="$dispatch('add')" class='focus:outline-none px-4 py-2 dark:text-gray-900 dark:bg-gray-100 text-white rounded-md hover:outline-none bg-teal-600 hover:bg-teal-800' >
                {{ __('att.add') }}
            </button>
        </div>    
        <div class="flex w-full justify-end">
            <x-Dropdown.dropdown-menu :$ranges :$selectedRange :$rangeName :$customRangeStart :$customRangeEnd/> 
        </div>
    </div>

    <div class=" w-full relative overflow-hidden">
        <table class="w-full divide-y divide-gray-200 dark:divide-gray-600 rounded-t-xl overflow-hidden">
            <thead class="bg-gray-100 dark:bg-gray-800  ">
            <tr class="rtl:text-right ltr:text-left">
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                    {{ __('calandar.date') }} 
                </th>
                <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                    {{ __('calandar.hours') }} 
                </th>
                <th scope="col" class="px-6 py-3   text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                    {{ __('calandar.classe') }} 
                </th>
                <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                    
                </th>
    
            </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-600">
        
                    @forelse ($attds as $attd)
                        <tr class="h-5 ">
                                <td class="px-6 py-2">
                                    <a wire:navigate href="{{url(app()->getLocale().'/Attds/Classe/'.$attd->id) }}"  class=" hover:underline dark:decoration-white">
                                        <div class="w-full text-sm font-semibold text-gray-900 dark:text-gray-200">
                                                {{ $attd->date   }} 
                                        </div>
                                    </a>
                            </td>
                            </a>
                            
                            <td class="px-6 py-2">
                                <a wire:navigate href="{{url(app()->getLocale().'/Attds/Classe/'.$attd->id) }}"  class=" hover:underline dark:decoration-white">
                                    <div class="w-full text-sm font-semibold text-gray-900 dark:text-gray-200">
                                            @if ($attd->time == 1)
                                                8H - 10H
                                            @elseif($attd->time == 2)
                                                10H - 12H
                                            @elseif($attd->time == 3)
                                                12H - 14H
                                            @endif
                                    </div>
                                </a>
                            </td>
                            <td class="px-6 py-2">
                                <a wire:navigate href="{{url(app()->getLocale().'/Attds/Classe/'.$attd->id) }}"  class=" hover:underline dark:decoration-white">
                                    <div class="w-full text-sm font-semibold text-gray-900 dark:text-gray-200">
                                            {{ $attd->classe->nom   }} 
                                    </div>
                                </a>
                            </td>
                            <td class="flex space-x-2 py-2 px-2 h-full items-center">   
                                <div>
                                    <button  wire:click="$dispatch('dlt',{ id: {{ $attd['id'] }} })" class=" stroke-red-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-red-600 dark:stroke-red-400 w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>                                                                               
                                    </button>
                                </div>                                
                            </td>
                            
                            
                        </tr>
                    @empty
                    @endforelse
    
        
            </tbody>
        </table>
        <div  wire:loading.flex class=" flex justify-center  items-center w-full h-full absolute top-0 dark:bg-gray-950 opacity-50 bg-white z-5">
            <div role="status ">
                <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-teal-500" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
   
</div>