<x-layout>
    
     <!-- Banner -->
 <h1 class="text-black">============= Banner =============</h1>
    <x-thumb.thinq_banner>
        <x-slot:image>
            <img class="w-full h-auto left-0 top-0 absolute object-cover" src="{{ asset('assets/banners/procurement-banner.png') }}" />
        </x-slot:image>
        <x-slot:content>
            Shaping our vision to being a leader in providing
             innovative solutions in procurement, 
             <br/>supply chain and logistics with our  
            </span><span class="text-[#003c97] text-2xl font-medium font-['Lexend'] leading-9">Sphere360</span>
            <span class="text-[#003c97] text-2xl font-light font-['Lexend'] leading-9">  degree efficiency technology system.
        </x-slot:content>
        <x-slot:title>
            Procurement Perfected, <br/>Logistics Redefined
        </x-slot:title>
        <x-slot:button>
            <x-buttons.banner-btn>
                <x-slot:btnname>Get Started</x-slot:btnname>
            </x-buttons.banner-btn>
        </x-slot:button>
    </x-thumb.thinq_banner>
<br/>
<br/>
<br/>

    <!-- Thumb Services  -->
<h1 class="text-black">============= Thumb Services =============</h1>
<x-thumb.thumb-service></x-thumb.thumb-service>

<br/>
<br/>
<br/>
 <!-- Single thumbnail -->
 <h1 class="text-black">============= Single thumbnail =============</h1>
<x-thumb.thumb-single>
    <x-slot:title>Quality Assurance</x-slot:title>
    <x-slot:content>We ensure that every procurement has strict quality checks and assurances with rigorous testing at every production stage.</x-slot:content>
    <x-slot:icon>
        <img class="w-[50px] h-[50px] left-[17px] top-[22px] absolute" src="{{ asset('assets/icons/diamond-i.png') }}" />
    </x-slot:icon>
</x-thumb.thumb-single>
<br/>
<br/>
<br/>
 <!-- two Column heading thumbnail -->
 <h1 class="text-black">============= Single thumbnail =============</h1>
<x-thumb.two-column-heading>
    <x-slot:title>Quality Assurance</x-slot:title>
    <x-slot:content>We ensure that every procurement has strict quality checks and assurances with rigorous testing at every production stage.</x-slot:content>
</x-thumb.two-column-heading>
<br/>
<br/>
<br/>

<!-- Thumb Clients  -->
<h1 class="text-black">============= Thumb Clients =============</h1>
<x-thumb.thumb-clients></x-thumb.thumb-clients>



</x-layout>