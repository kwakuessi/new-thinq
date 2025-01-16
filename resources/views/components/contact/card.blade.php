
@props(['description', 'image'])
<div>
    <div class="max-w-72  rounded-t-lg ">
        <img src="{{URL::asset($image)}}" alt="Uhas_telecel logo" height="100" width="100" class="cover w-full">

        <div class="p-8 space-y-3 border rounded-b-lg border-t-0 border-[#01274F] ">
            
            <p class="text-[#1D4289] text-sm">{{$description}}</p>
                
                <div class="flex items-center justify-between">
                   
                    <button class="bg-[#01274F] inline-flex items-center text-white rounded-full p-1 px-2 text-xs">Sales Enquiry <x-heroicon-s-arrow-up-right class="size-4"/></button>

                    <button class="border text-[#01274F] inline-flex items-center  rounded-full p-1 px-2 text-xs">Get a quote <x-heroicon-s-arrow-up-right class="size-4"/></button>
 
                </div>
          
        </div>

    </div>
</div>