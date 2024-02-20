<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight">
            {{ __(' كشف الدرجات') }}
        </h2>
    </x-slot>

    <div class="py-2 print:py-0 ">
        <div class="p-1 flex justify-between items-center w-full print:hidden">
            <div class="print:text-2xl print:font-bold"></div>
            <button x-on:click="printDiv()" class="print:hidden mx-4  bg-gray-200 p-4 rounded-md hover:bg-teal-200 text-teal-800 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                </svg>
            </button>
        </div>
        <div  class="m-2 print:m-0" >
            <div class="p-1 mb-6 flex items-center flex-col w-full space-y-4 print:space-y-0  ">
                @forelse ($lists as $list)
                    <div class=" flex flex-col justify-center items-center  h-[297mm] w-[210mm] p-3 bg-white dark:bg-gray-900 overflow-hidden print:shadow-none">
                            <div class="w-full h-full flex flex-col items-start p-2"> 
                                @if ($list->classe->moy == 1)
                                    @livewire('bulttin-elem',['etud' => $list->id,'sem' => $sem,], key($list->id))
                                @else
                                    @livewire('bullltin',['etud' => $list->id,'sem' => $sem,], key($list->id))
                                @endif
                            </div> 
    
                            <div class=" w-full h-28 text-sm px-20 text-gray-700 print:dark:text-gray-900   dark:text-gray-100">
                                <div class="w-full flex  justify-center items-center"> 
                                <div>بتاريخ :  </div>
                                    <div class=" mx-4 font-bold">{{ \Carbon\Carbon::now()->format('d-m-Y') }}</div>
                                    <div> :Le </div>
                                </div> 
                                <div class=" w-full flex justify-between ">
                                    <div>توقيع المدير</div>
                                    <div>توقيع الوكيل</div>
                                </div>
                            </div>
                    </div>
                @empty
                @endforelse

            </div>

        </div>
    </div>
</x-app-layout>