
@props(['name',  'icon'])
<div class="relative flex items-center justify-center space-x-4 px-4 bg-[#01274e] rounded-full w-full max-w-[294px] h-[60px] sm:h-[65px] md:h-[70px] lg:h-[74px] mx-auto">
    <img src="{{URL::asset($icon)}}" alt="Uhas_telecel logo"  class="size-6">

      <div class="text-white text-base sm:text-lg md:text-xl lg:text-2xl font-light font-['Lexend'] leading-[24px] sm:leading-[27px] md:leading-[30px] lg:leading-[36px] text-center whitespace-nowrap">
        {{$name}}
      </div>
      <x-heroicon-s-arrow-up-right class="size-5 text-[#F15928]"/>
    
  </div>