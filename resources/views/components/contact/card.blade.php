
@props(['description', 'image', 'buttonA', 'buttonB'])
<div>
    <div class="max-w-72  rounded-t-lg">
        <img src="{{URL::asset($image)}}" alt="Uhas_telecel logo" width="100" class="cover w-full">

        <div class="p-4 md:p-8  space-y-3 border rounded-b-lg border-t-0 border-[#01274F] ">
            
            <p class="text-[#1D4289] h-28 text-xs sm:h-20 sm:text-sm">{{$description}}</p>
                
                <div class="flex flex-col md:flex-row space-y-2 items-center justify-between">
                   
                    <button class="bg-[#01274F] inline-flex items-center text-white rounded-full p-1 px-2 text-xs">{{$buttonA}} <x-heroicon-s-arrow-up-right class="size-4"/></button>

                    <button class="border text-[#01274F] inline-flex items-center  rounded-full p-1 px-2 text-xs">{{$buttonB}} <x-heroicon-s-arrow-up-right class="size-4"/></button>
 
                </div>
          
        </div>


</div>

