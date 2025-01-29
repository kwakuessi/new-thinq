@php
$navlinks = [
        ['title' => 'Booking', 'icon' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/5ca1c0e9ff2726da7f2b6f5af227ca12d1d0ea9ed490b09b7ba8a981de06f73e?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03'],
        ['title' => 'Order', 'icon' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/5ca1c0e9ff2726da7f2b6f5af227ca12d1d0ea9ed490b09b7ba8a981de06f73e?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03'],
        ['title' => 'Tracking', 'icon' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/5ca1c0e9ff2726da7f2b6f5af227ca12d1d0ea9ed490b09b7ba8a981de06f73e?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03'],
        ['title' => 'Quotation', 'icon' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/5ca1c0e9ff2726da7f2b6f5af227ca12d1d0ea9ed490b09b7ba8a981de06f73e?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03'],
        ['title' => 'Call us', 'icon' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/5ca1c0e9ff2726da7f2b6f5af227ca12d1d0ea9ed490b09b7ba8a981de06f73e?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03'],
        ['title' => 'Proposal', 'icon' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/5ca1c0e9ff2726da7f2b6f5af227ca12d1d0ea9ed490b09b7ba8a981de06f73e?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03'],


    ];
@endphp

<x-layout>

   <!-- Banner -->
   <x-thumb.thinq_banner>
    <x-slot:image>
        <img class="object-cover absolute inset-0 size-full" src="{{ asset('assets/banners/logistics.png') }}" alt="Cargo ship at sea representing international logistics" />
    </x-slot:image>
    <x-slot:title>
    <h1 class="text-5xl leading-[58px] max-md:max-w-full max-md:text-4xl max-md:leading-[54px]">
    Reliable Cargo Protection, Logistics Service Excellence
    </h1>
    </x-slot:title>
    <x-slot:btntitle>Register</x-slot:btntitle>
    <x-slot:content>

    <p class="mt-5 text-xl leading-8 max-md:max-w-full">
        Unlocking value at every step of the supply chain with world-class
        network, technology and service in international transportation
        logistics
    </p>

    </x-slot:content>

    <x-slot:iconnave>

    <nav class="hidden md:flex flex-wrap gap-5  self-stretch self-center place-items-end my-auto "
        role="navigation" aria-label="Quick actions">
        <div class="grid grid-cols-3">
          <div class="col-span-2"></div>
          <div>
              <ul class="grid grid-cols-3 gap-4  ">
                @foreach($navlinks as $navlink)
                    <button class="flex flex-col grow shrink w-[38px]" aria-label={{$navlink['title']}}>
                        <div
                            class="flex gap-2.5 items-center self-center px-3 py-2.5 w-10 rounded-md border border-white border-solid min-h-[40px]">
                            <img loading="lazy" src="{{URL::asset($navlink['icon'])}}" alt={{$navlink['title']}}
                                class="object-contain self-stretch my-auto aspect-[0.85] w-[17px]" />
                        </div>
                        <span class="mt-1.5 text-xs text-center text-white">{{$navlink['title']}}</span>
                    </button>
                  @endforeach
              </ul>
          </div>


        </div>
        

    </nav>
    </x-slot:iconnave>

</x-thumb.thinq_banner>




<div class="bg-[#DDE8F0]">

<!-- Product Sourcing -->
<div class="max-w-7xl mx-auto px-4 py-28 sm:px-6 lg:px-8 space-y-20">

<div class="grid rid-cols-1  w-full justify-center md:grid-cols-3 gap-5 space-y-5">
<div class="flex flex-col items-start self-stretch my-auto min-w-[240px] w-[265px]">
      <div class="flex relative flex-col max-w-full w-[210px]">
      <div class="flex absolute z-0 flex-col  h-[50px] -left-5 -top-[2px] ">
        <img loading="lazy"
                            src="{{ asset('assets/icons/backdrop.png') }}"
                            alt="Quality Assurance icon" class="object-contain aspect-[1.2] w-[42px]" />
          <!-- <div class="flex shrink-0 w-full h-10 rounded-full"></div> -->
        </div>
        <div class="z-0 text-3xl leading-8 text-blue-900">
        Product <br />Sourcing
        </div>
      </div>
      <div class="self-stretch mt-11 text-xl font-light text-zinc-500 max-md:mt-10">
      Boost your strategic reach and business impact with our deep and technical sourcing expertise.
      </div>
      <div class="flex gap-1.5 items-center mt-11 text-xl font-medium text-blue-900 whitespace-nowrap max-md:mt-10">
        <div class="self-stretch my-auto w-[77px]" tabindex="0" role="button" style="cursor: pointer;">Explore</div>
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b8fa05dd85d5acf91eb173ee4875c6b64b06584824e9d16f491eb11df0917adb?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" alt="Explore Contract Management" />
      </div>
</div>

<div class="flex flex-col items-start self-stretch my-auto min-w-[240px] w-[265px]">
      <div class="flex relative flex-col max-w-full w-[210px]">
        <div class="flex absolute z-0 flex-col  h-[50px] -left-5 -top-[2px] ">
        <img loading="lazy"
                            src="{{ asset('assets/icons/backdrop.png') }}"
                            alt="Quality Assurance icon" class="object-contain aspect-[1.2] w-[42px]" />
          <!-- <div class="flex shrink-0 w-full h-10 rounded-full"></div> -->
        </div>
        <div class="z-0 text-3xl leading-8 text-blue-900">
        Supply Chain<br />Management
        </div>
      </div>
      <div class="self-stretch mt-11 text-xl font-light text-zinc-500 max-md:mt-10">
      Unlock value at every step of the supply chain with our world-class network and technology.
      </div>
      <div class="flex gap-1.5 items-center mt-11 text-xl font-medium text-blue-900 whitespace-nowrap max-md:mt-10">
        <div class="self-stretch my-auto w-[77px]" tabindex="0" role="button" style="cursor: pointer;">Explore</div>
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b8fa05dd85d5acf91eb173ee4875c6b64b06584824e9d16f491eb11df0917adb?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" alt="Explore Contract Management" />
      </div>
</div>

<div class="flex flex-col items-start self-stretch my-auto min-w-[240px] w-[265px]">
      <div class="flex relative flex-col max-w-full w-[210px]">
        <div class="flex absolute z-0 flex-col  h-[50px] -left-5 -top-[2px] ">
        <img loading="lazy"
                            src="{{ asset('assets/icons/backdrop.png') }}"
                            alt="Quality Assurance icon" class="object-contain aspect-[1.2] w-[42px]" />
          <!-- <div class="flex shrink-0 w-full h-10 rounded-full"></div> -->
        </div>
        <div class="z-0 text-3xl leading-8 text-blue-900">
        Contract<br />Management
        </div>
      </div>
      <div class="self-stretch mt-11 text-xl font-light text-zinc-500 max-md:mt-10">
      Powering business growth through seamless supply chain solutions.
      </div>
      <div class="flex gap-1.5 items-center mt-11 text-xl font-medium text-blue-900 whitespace-nowrap max-md:mt-10">
        <div class="self-stretch my-auto w-[77px]" tabindex="0" role="button" style="cursor: pointer;">Explore</div>
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b8fa05dd85d5acf91eb173ee4875c6b64b06584824e9d16f491eb11df0917adb?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" alt="Explore Contract Management" />
      </div>
</div>



</div>

<!-- Our Process -->

<div class="flex  flex-col justify-center  py-12 max-md:pl-5" role="region" aria-label="Our Process Section">
  <div class="flex relative flex-col mt-1.5 w-full max-md:max-w-full">
    <div class="flex z-0 flex-wrap gap-10 items-start w-full max-md:max-w-full">
      <div class="flex relative flex-col grow shrink w-[153px]">
        <div class="flex absolute z-0 flex-col pb-2.5 bottom-[-11px] h-[50px] left-[-23px] w-[59px]">
          <div class="flex shrink-0 w-full h-10 rounded-full"></div>
        </div>
        <h2 class="z-0 text-3xl font-medium text-blue-900">Our Process</h2>
      </div>
      <div class=" shrink text-xl font-light leading-7 text-sky-800 w-[648px] max-md:max-w-full">
        Drive profitable growth and lead change across the organization with confidence, rising above supply chain disruptions with optimized costs, improve efficiencies with ThinQSphere procurement solutions and process.
      </div>
    </div>
    <div class="flex z-0 flex-wrap gap-5 justify-between items-end mt-10 max-w-full w-[1080px] max-md:mt-10">
      <div class="flex flex-col mt-5">
        <div class="flex gap-2.5 items-center p-2.5 w-full">
          <div class="flex flex-1 shrink gap-2.5 items-center self-stretch px-8 py-8 my-auto basis-0 bg-sky-950 h-[133px] min-h-[133px] rounded-[67px] w-[133px] max-md:px-5">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/da8504039e74f440e300bcd31960b00ae0339f36e82c0f0ff0ba138d80259b98?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain self-stretch my-auto aspect-square w-[70px]" alt="Initiation process icon" />
          </div>
        </div>
        <div class="mt-14 text-2xl text-center text-sky-950 max-md:mt-10">Initiation</div>
      </div>
      <div class="flex flex-col mt-16 max-md:mt-10">
        <div class="flex gap-2.5 items-center p-2.5 w-full">
          <div class="flex flex-col flex-1 shrink justify-center items-center self-stretch px-7 my-auto basis-0 bg-sky-950 h-[133px] min-h-[133px] rounded-[67px] w-[133px] max-md:px-5">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f044e6730e211a32ad13e526779df69a76dd40b9ae4b369479431ff63bd86501?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain aspect-[1.11] w-[78px]" alt="Sourcing process icon" />
          </div>
        </div>
        <div class="mt-5 text-2xl text-center text-sky-950">Sourcing</div>
      </div>

      <div class="flex flex-col mt-20 max-md:mt-10">
        <div class="flex gap-2.5 items-center p-2.5 w-full">
          <div class="flex flex-col flex-1 shrink justify-center items-center self-stretch px-7 my-auto basis-0 bg-sky-950 h-[133px] min-h-[133px] rounded-[67px] w-[133px] max-md:px-5">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/bb4cfba00cf69c57a26ac0ea5f40728bf5887665664abac4806c0497533def5a?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain aspect-[1.1] w-[77px]" alt="Negotiation process icon" />
          </div>
        </div>
        <div class="text-2xl text-right text-sky-950">Negotiation</div>
      </div>

      <div class="flex flex-col mt-20 max-md:mt-10">
        <div class="flex gap-2.5 items-center p-2.5 w-full">
          <div class="flex relative flex-1 shrink items-start self-stretch px-9 py-10 my-auto basis-0 bg-sky-950 h-[133px] min-h-[133px] rounded-[67px] w-[133px] max-md:px-5">
          <img loading="lazy" src="{{ asset('assets/icons/compliance.png') }}" class="object-contain z-0 shrink-0 my-auto aspect-square w-[70px]" alt="Production process icon" />

          <div class="flex z-0 shrink-0 my-auto h-[55px] w-[65px]"></div>
            <div class="flex absolute z-0 shrink-0 self-start bottom-[30px] h-[70px] left-[34px] w-[63px]"></div>
          </div>
        </div>
        <div class="text-2xl text-center text-sky-950">Compliance</div>
      </div>

      <div class="flex flex-col mt-16 max-md:mt-10">
        <div class="flex relative gap-2.5 items-start px-8 py-8 bg-sky-950 h-[133px] min-h-[133px] rounded-[67px] w-[133px] max-md:px-5">
          <img loading="lazy" src="{{ asset('assets/icons/production.png') }}" class="object-contain z-0 shrink-0 my-auto aspect-square w-[70px]" alt="Production process icon" />
          <div class="flex absolute z-0 flex-col self-start pb-3 bottom-[39px] h-[55px] right-[33px] w-[65px]">
            <div class="flex shrink-0 w-11 rounded-full h-[43px]"></div>
          </div>
        </div>
        <div class="mt-5 text-2xl text-sky-950">Production</div>
      </div>

      <div class="flex flex-col mt-5">
        <div class="flex gap-2.5 items-center p-2.5 w-full">
          <div class="flex flex-1 shrink gap-2.5 items-center self-stretch px-8 py-8 my-auto basis-0 bg-sky-950 h-[133px] min-h-[133px] rounded-[67px] w-[133px] max-md:px-5">
            <img loading="lazy" src="{{ asset('assets/icons/supply-chain.png') }}"  class="object-contain self-stretch my-auto aspect-square w-[70px]" alt="Initiation process icon" />
          </div>
        </div>
        <div class="mt-14 text-2xl text-center text-sky-950 max-md:mt-10">Supply Chain</div>
      </div>

    </div>

    <div class="grid grid-cols-1 place-items-center mt-20">
      <button class="flex flex-col justify-center px-6 py-4 w-full bg-sky-950 max-w-[224px] min-h-[56px] rounded-[40px] max-md:px-5 hover:bg-sky-900 focus:outline-none focus:ring-2 focus:ring-sky-600" aria-label="Request Proposal">
        <div class="flex gap-2 items-center">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/99548511d1ce437ec14297e39c97193b8f3b8441e187ecf7c5c77336e11616dc?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain shrink-0 self-stretch my-auto aspect-[0.79] w-[19px]" alt="" />
          <span class="self-stretch my-auto w-[135px]">Request Proposal</span>
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/26bf23af38959559c4bef05b9621bc943f3365b5a91b88a9afea425b4d3001bb?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain shrink-0 self-stretch my-auto aspect-[0.9] w-[9px]" alt="" />
        </div>
      </button>
    </div>

  </div>
</div>


<!-- Integrated Industry -->

<section id="Service Industry" class="pt-10">
       <div class="flex flex-col justify-center px-4 py-10">
            <div class="flex justify-between flex-wrap gap-10 items-start mt-1 max-md:max-w-full">
                <div class="flex relative flex-col min-w-[240px] ">
                    <div class="flex absolute -bottom-3 -left-6 z-0 flex-col px-3 -pt-1 pb-0.5 h-[50px] w-[59px]"
                        role="presentation" aria-hidden="true">
                        <div class="flex shrink-0 w-full h-10 rounded-full"><img loading="lazy"
                            src="{{ asset('assets/icons/backdrop.png') }}"
                            alt="Quality Assurance icon" class="object-contain aspect-[1.2] w-[42px]" /></div>
                    </div>
                    <div class="z-0 text-3xl font-medium text-blue-900" role="heading" aria-level="2">Integrated Industry
                    </div>
                </div>
                <div class="flex flex-col text-base min-w-[240px] w-[620px] max-md:max-w-full">
                    <div class="font-light leading-7 text-sky-800 max-md:max-w-full">
                    Experience seamless procurement across multiple industries where we 
                    streamline sourcing and deliver high-quality products tailored to your business needs.
                    </div>
                    <a href="#explore-services"
                        class="flex gap-1 items-center self-start mt-5 text-blue-900 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2">
                        <span class="self-stretch my-auto ">
                        Explore integrated industries
                        </span>
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/f3d9e964cf22bcc40a9e2deacff03656061780442968e707cd2ea31d462c6b2d?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                            class="object-contain shrink-0 self-stretch my-auto aspect-[1.12] w-[9px]"
                            alt="Arrow indicating link to explore service industries" />
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col px-7 max-md:pl-5">
            <div class="flex flex-col max-md:max-w-full">
                <div class="flex flex-col w-full max-md:max-w-full">
                    <div class="flex flex-wrap gap-5 items-start w-full max-md:max-w-full">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/6a7e8bb28c09ace15a8db05e0ec482ca3cac153f75e639c672995d8d0b9e905b?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                            alt="" class="object-contain grow shrink aspect-[0.72] min-w-[240px] w-[204px]" />
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/9e8cc99e47d82a13d50ee3b889344ba7905ecf1dde8d49deaf373cb5ecf4ae71?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                            alt="" class="object-contain grow shrink aspect-[0.72] min-w-[240px] w-[205px]" />
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/188e6375d701ad3574730943f2c8d7c712d05315726fde4647fd604a910c8b48?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                            alt="" class="object-contain grow shrink aspect-[0.72] min-w-[240px] w-[203px]" />
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/9817b8ac49e0c05e7f313112239d32b68f176da5a98022691d33f469058b17b4?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                            alt="" class="object-contain grow shrink aspect-[0.72] min-w-[240px] w-[204px]" />
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/dd6849ed1ef6b4034979eaec018be558ca1cafc91bd0be87ad2d05f5f4bb9bc4?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                            alt="" class="object-contain grow shrink aspect-[0.72] min-w-[240px] w-[204px]" />
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/2e9aa5d37c7f2939bb7de0e6644281f00d92b65d0855d400871d47b03c54193e?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                            alt="" class="object-contain grow shrink aspect-[0.72] min-w-[240px] w-[205px]" />
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/add9fd2a641600209315e5edf6b16469f1c9b04fd172787ec2863d33fd299009?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                            alt="" class="object-contain grow shrink aspect-[0.72] min-w-[240px] w-[204px]" />
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/09cdda16db2d3c1a20ba2b55626c5e9dc186e04409d4209e38182a3d7d62e078?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                            alt="" class="object-contain grow shrink aspect-[0.72] min-w-[240px] w-[205px]" />
                    </div>
                    <div
                        class="flex gap-10 justify-between items-center self-center mt-11 max-w-full w-[100px] max-md:mt-10">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/eeb824e358dc87bb7f7f21b03507ad3530479e8b482e0513a0481ca49d270f72?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                            alt="" class="object-contain shrink-0 self-stretch my-auto aspect-square w-[30px]" />
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/99ff8fb85b33702941838467dd04d785ef6e4972fac0a6b9695c9fee69f486a6?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                            alt="" class="object-contain shrink-0 self-stretch my-auto aspect-square w-[30px]" />
                    </div>
                </div>
               
            </div>
        </div>

</section>

<div class="mb-[157px] flex flex-col">
  <div class="flex flex-col bg-[#DDE8F0] lg:bg-[#FFFFFF] p-6 rounded items-center w-full max-md:max-w-full">
    <div class="grid grid-cols-3 gap-10 items-center w-full max-md:max-w-full">
      <div class="span-cols-2 self-stretch my-auto text-3xl font-medium leading-9 text-sky-950 w-[572px] max-md:max-w-full">
        <span class="text-zinc-500">Expert in deep supply chain</span>
        operations capability and experience
      </div>
      <div></div>
      <div class="flex flex-col self-stretch my-auto text-xl leading-7 text-blue-900 w-[200px]">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a82242e4163e5f0f27fa3acc6f857786dab44a20e2b7bc2f5f3a335c3e8a1e74?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain aspect-[1.2] w-[42px]" alt="Planning Icon" />
        <div class="mt-2">
          Integrated Business
          <br />
          Planning & SIOP
        </div>
      </div>
    </div>
    <div class="flex flex-wrap gap-10 items-start self-stretch mt-20 w-full text-xl leading-7 text-blue-900 max-md:mt-10 max-md:max-w-full">
      <div class="flex flex-col grow shrink min-w-[240px] w-[225px]">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/43b424badc0cab305b82761233cbbb24a2b2565e4d22f80ae5641484a33620bc?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain aspect-[1.17] w-[42px]" alt="Transformation Icon" />
        <div class="mt-2">
          Supply Chain & Operations
          <br />
          Transformation
        </div>
      </div>
      <div class="flex flex-col grow shrink min-w-[240px] w-[231px]">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/1cfb2d100a0f211166439acebb8af87bbf76c151b967ada6ff4b544881fa128d?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain aspect-[1.17] w-[42px]" alt="Optimization Icon" />
        <div class="mt-2">
          Warehousing & Logistics
          <br />
          Optimization
        </div>
      </div>
      <div class="flex flex-col grow shrink leading-tight w-[187px]">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c0cef901385b1ce8fe9b44f99a43ec1fb94c095367b1da28c60e32d1f08b004f?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain aspect-[1.17] w-[42px]" alt="Procurement Icon" />
        <div class="mt-2">Strategic Procurement</div>
      </div>
    </div>

    <div class="flex flex-wrap gap-10 items-start self-stretch mt-20 w-full text-xl leading-7 text-blue-900 max-md:mt-10 max-md:max-w-full">
      <div class="flex flex-col grow shrink min-w-[240px] w-[225px]">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d2e77a86a05532c19d090f6b198c52a4d72c0d75df6cb38c0a02240afe2ea8fa?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain aspect-[1.17] w-[42px]" alt="Transformation Icon" />
        <div class="mt-2">
        Due Diligence &
          <br />
          Integration
        </div>
      </div>
      <div class="flex flex-col grow shrink min-w-[240px] w-[231px]">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/0079de04817e9345fae3fa95d3f2a514084da4a43a92a82fc224e2542089af2f?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain aspect-[1.17] w-[42px]" alt="Optimization Icon" />
        <div class="mt-2">
        Supply Chain Options
          <br />
          & Resilience
        </div>
      </div>
      <div class="flex flex-col grow shrink leading-tight w-[187px]">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e2e1625d6f6f82c30ff4a38e9191db6fe65ee0391e3302d66683fedfb577c4b4?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain aspect-[1.17] w-[42px]" alt="Procurement Icon" />
        <div class="mt-2">Operations Excellence</div>
      </div>
    </div>


    <div class="flex flex-wrap gap-10 items-start self-stretch mt-20 w-full text-xl leading-7 text-blue-900 max-md:mt-10 max-md:max-w-full">
      <div class="flex flex-col grow shrink min-w-[240px] w-[225px]">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d8ecfb499d68d7d06f1c894be11ea8f2463d260597de642762bad7b3179a85ea?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain aspect-[1.17] w-[42px]" alt="Transformation Icon" />
        <div class="mt-2">
        New Product Introduction
          <br />
          & Life Cycle Management
        </div>
      </div>
      <div class="flex flex-col grow shrink min-w-[240px] w-[231px]">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/09c8ac78abe81af647483ac2044ea224a01b25c5781d5d3f87b25784176acf64?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain aspect-[1.17] w-[42px]" alt="Optimization Icon" />
        <div class="mt-2">
        <div class="mt-2">Supply Chain Design</div>
        </div>
      </div>
      <div class="flex flex-col grow shrink leading-tight w-[187px]">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ebea0fb78f9f055615c60bb91c1ac0d982d7d6d58ee5f546a09e8bdb38f5c59e?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&" class="object-contain aspect-[1.17] w-[42px]" alt="Procurement Icon" />
        <div class="mt-2">Digital & Artificial Intelligence Solutions</div>
      </div>
    </div>

  </div>
</div>
<!--  -->

<div class="flex relative flex-col items-start">
  <div class="flex z-0 flex-wrap gap-10 justify-between items-end max-w-full text-blue-900 w-[684px]">
    <h2 class="text-3xl font-medium min-w-[240px] w-[270px]">Successful Cases</h2>
    <div class="flex gap-1.5 items-center text-base" role="button" tabindex="0">
      <div class="self-stretch my-auto w-[180px]">Discover Opportunities</div>
      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f3d9e964cf22bcc40a9e2deacff03656061780442968e707cd2ea31d462c6b2d?apiKey=7a62a3bc0ec34c60a1ee6236375d4957&" class="object-contain shrink-0 self-stretch my-auto aspect-[1.12] w-[9px]" alt="" />
    </div>
  </div>
  <div class="flex z-0 flex-wrap gap-10 items-center self-stretch mt-16 w-full max-md:mt-10 max-md:max-w-full">
    <article class="bg-[#DDE8F0] flex flex-col grow shrink justify-center self-stretch px-6 py-5 my-auto rounded-xl bg-slate-200 bg-opacity-60 min-h-[209px] min-w-[240px] w-[307px] max-md:px-5">
      <div class="flex flex-col w-full max-w-[313px]">
        <div class="flex gap-1 items-center self-start text-xs leading-3 text-blue-900">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/098c321c9e5e993ba2bc24057d4e3dcf1e62dcb5e30f335308894cfc908f526c?apiKey=7a62a3bc0ec34c60a1ee6236375d4957&" class="object-contain shrink-0 self-stretch my-auto aspect-[1.4] w-[7px]" alt="" />
          <div class="my-auto w-[149px]">Procurement & Supply Chain<br />Transformation</div>
        </div>
        <div class="flex gap-7 items-center mt-28 w-full max-md:mt-10">
          <div class="flex gap-2.5 items-center self-stretch my-auto">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c71f391afe9073dbeb018d3d3ee9929d3ec5f37c08842be0fea8e51827196b32?apiKey=7a62a3bc0ec34c60a1ee6236375d4957&" class="object-contain shrink-0 self-stretch my-auto rounded-full aspect-[1.03] w-[35px]" alt="David Baker profile picture" />
            <div class="flex flex-col items-start self-stretch pr-3.5 my-auto rounded-none w-[67px]">
              <div class="text-base leading-none text-blue-900">David Baker</div>
              <!-- <div class="z-10 text-xs leading-3 font-[250] text-neutral-400">CEO Baker Capital</div> -->
            </div>
          </div>
          <div class="shrink-0 self-stretch my-auto h-0 border border-solid border-sky-950 w-[173px]" role="separator"></div>
        </div>
      </div>
    </article>
    <article class="flex flex-col grow shrink self-stretch px-3 pt-3 pb-5 my-auto text-blue-900 rounded-xl bg-slate-200 bg-opacity-60 min-h-[209px] min-w-[240px] w-[272px]">
      <div class="flex flex-col w-full max-w-[301px]">
        <div class="flex gap-1 items-center self-start text-xs leading-3">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/40089bdb85e8825e449a2681e09ef9499197f38fb9f9f11b4eeb82ccc4e98024?apiKey=7a62a3bc0ec34c60a1ee6236375d4957&" class="object-contain shrink-0 self-stretch my-auto aspect-[1.4] w-[7px]" alt="" />
          <div class="flex-1 shrink gap-2.5 self-stretch my-auto w-[149px]">Procurement & Supply Chain<br />Transformation</div>
        </div>
        <div class="flex flex-col justify-center p-2.5 mt-28 w-full text-base leading-none max-md:mt-10">
          <div class="flex gap-6 items-center w-full">
            <div class="flex gap-2.5 items-center self-stretch my-auto">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/70765ab09862bf23329258f3460e97d264db0f90b2ee82a30c1f6a8179fd0417?apiKey=7a62a3bc0ec34c60a1ee6236375d4957&" class="object-contain shrink-0 self-stretch my-auto rounded-full aspect-square w-[34px]" alt="David Baker profile picture" />
              <div class="self-stretch my-auto w-[67px]">David Baker</div>
            </div>
            <div class="shrink-0 self-stretch my-auto h-0 border border-solid border-sky-950 w-[145px]" role="separator"></div>
          </div>
        </div>
      </div>
    </article>
    <article class="flex flex-col grow shrink justify-center self-stretch px-6 py-5 my-auto rounded-xl bg-slate-200 bg-opacity-60 min-h-[209px] min-w-[240px] w-[238px] max-md:px-5">
      <div class="flex flex-col w-full max-w-[244px]">
        <div class="flex gap-1 items-center self-start text-xs leading-3 text-blue-900">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/1e82d55f590a6071b25bf04ef5b1fe742e8b728c36e8d1996c4f3db149720870?apiKey=7a62a3bc0ec34c60a1ee6236375d4957&" class="object-contain shrink-0 self-stretch my-auto aspect-[1.4] w-[7px]" alt="" />
          <div class="my-auto w-[149px]">Procurement & Supply Chain<br />Transformation</div>
        </div>
        <div class="flex gap-4 items-center mt-28 w-full max-md:mt-10">
          <div class="flex gap-2.5 items-center self-stretch my-auto">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/05f0814174c134ad5d03c07daaa067c9ebfa9cb210d7fceb170a92b542f3bcba?apiKey=7a62a3bc0ec34c60a1ee6236375d4957&" class="object-contain shrink-0 self-stretch my-auto rounded-full aspect-[1.03] w-[35px]" alt="David Baker profile picture" />
            <div class="flex flex-col items-start self-stretch pr-3.5 my-auto rounded-none w-[67px]">
              <div class="text-base leading-none text-blue-900">David Baker</div>
              <!-- <div class="z-10 text-xs leading-3 font-[250] text-neutral-400">CEO Baker Capital</div> -->
            </div>
          </div>
          <div class="shrink-0 self-stretch my-auto h-0 border border-solid border-sky-950 w-[117px]" role="separator"></div>
        </div>
      </div>
    </article>
  </div>
  <nav class="flex absolute z-0 flex-col bottom-[-74px] right-[495px]" aria-label="Slide navigation">
    <div class="flex gap-4 items-center">
      <button class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 rounded-full bg-slate-900" aria-current="true" aria-label="Slide 1"></button>
      <button class="flex shrink-0 self-stretch my-auto h-2.5 rounded-full bg-stone-400 w-[9px]" aria-label="Slide 2"></button>
      <button class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 rounded-full bg-stone-400" aria-label="Slide 3"></button>
      <button class="flex shrink-0 self-stretch my-auto w-2.5 h-2.5 rounded-full bg-stone-400" aria-label="Slide 4"></button>
    </div>
  </nav>
</div>

<!--  -->

<!-- <div class="flex flex-col">
  <div class="flex flex-wrap items-start w-full max-md:max-w-full">
    <div
      class="grow shrink text-3xl font-medium leading-9 text-sky-950 w-[598px] max-md:max-w-full"
      role="heading"
      aria-level="2"
    >
      <span class="">From rapid sprints for short-term gains</span>
      <span class="text-zinc-500">
        to transformation for competitive advantage we're here to get you there.
      </span>
      <br />
    </div>
    <button
      class="flex flex-col grow shrink justify-center px-6 py-4 text-base font-light leading-none text-white bg-sky-950 min-h-[56px] rounded-[40px] w-[179px] max-md:px-5 hover:bg-sky-900 focus:outline-none focus:ring-2 focus:ring-sky-700"
      aria-label="Request Proposal"
    >
      <div class="flex gap-2 items-center">
        <img
          loading="lazy"
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/88eeda80d8f44987983745c2ccc4e84792b7f0b7cbf0ab505ee2e96fa6c6e00d?placeholderIfAbsent=true&apiKey=7a62a3bc0ec34c60a1ee6236375d4957"
          class="object-contain shrink-0 self-stretch my-auto aspect-[0.86] w-[19px]"
          alt=""
          aria-hidden="true"
        />
        <div class="self-stretch my-auto w-[135px]">Request Proposal</div>
        <img
          loading="lazy"
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/df68c653a1aef3bbbceea90618332cd0e2223d5928541cdcf5fb71dc0196f227?placeholderIfAbsent=true&apiKey=7a62a3bc0ec34c60a1ee6236375d4957"
          class="object-contain shrink-0 self-stretch my-auto aspect-square w-[9px]"
          alt=""
          aria-hidden="true"
        />
      </div>
    </button>
  </div>
  <div
    class="flex flex-wrap items-center mt-20 w-full text-4xl font-light text-white max-md:mt-10 max-md:max-w-full"
  >
    <div
      class="flex flex-col grow shrink justify-center items-start self-stretch px-16 py-24 my-auto min-h-[256px] min-w-[240px] w-[686px] max-md:px-5 max-md:max-w-full"
      role="heading"
      aria-level="2"
    >
      <div class="z-10 px-3.5 pt-3 pb-0 max-w-full w-[364px] max-md:pb-2.5">
        Talk to an industry expert
      </div>
    </div>
    <img
      loading="lazy"
      src="https://cdn.builder.io/api/v1/image/assets/TEMP/7014540646ad7d1cd30d1809fd80cfee0e52a7aa4f308347d236102b5f331765?placeholderIfAbsent=true&apiKey=7a62a3bc0ec34c60a1ee6236375d4957"
      class="object-contain grow shrink self-stretch my-auto aspect-[1.28] min-w-[240px] w-[262px]"
      alt="Industry expert illustration"
    />
  </div>
</div> -->

<div class="flex flex-col">
  <div class="flex flex-wrap justify-between items-start w-full max-md:max-w-full">
    <div
      class="grow shrink text-3xl font-medium leading-9 text-sky-950 w-[598px] max-md:max-w-full"
      role="heading"
      aria-level="2"
    >
      <span>From rapid sprints for short-term gains</span>
      <span class="text-zinc-500">
        to <br class="hidden md:block"/> transformation for competitive advantage <br class="hidden md:block"/> we're here to get you there.
      </span>
      
    </div>
    <button
      class="flex flex-col w-fit shrink justify-center px-6 py-4 text-base font-light leading-none text-white bg-sky-950 min-h-[56px] rounded-[40px]  max-md:px-5 hover:bg-sky-900 focus:outline-none focus:ring-2 focus:ring-sky-700"
      aria-label="Request Proposal"
    >
      <div class="flex gap-2 items-center">
        <img
          loading="lazy"
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/aeb6e3c38b981505adc6f3dab2e2df82fb5fb87f787fa747c135d8b9cc672c52?placeholderIfAbsent=true&apiKey=7a62a3bc0ec34c60a1ee6236375d4957"
          class="object-contain shrink-0 self-stretch my-auto aspect-[0.79] w-[19px]"
          alt=""
          aria-hidden="true"
        />
        <div class="self-stretch my-auto w-[135px]">Request Proposal</div>
        <img
          loading="lazy"
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/8ffed5abcb7e204bea339e11b48fea66a42dd42cc96e8abc3115405a0dc84366?placeholderIfAbsent=true&apiKey=7a62a3bc0ec34c60a1ee6236375d4957"
          class="object-contain shrink-0 self-stretch my-auto aspect-square w-[9px]"
          alt=""
          aria-hidden="true"
        />
      </div>
    </button>
  </div>
  <div
    class="flex flex-wrap items-center mt-20 w-full text-4xl font-light text-white max-md:mt-10 max-md:max-w-full"
  >
    <div
      class="flex flex-col grow shrink self-stretch min-w-[240px] w-[686px] max-md:max-w-full"
    >
      <div
        class="flex relative flex-col px-16 pt-28 pb-14 w-full min-h-[256px] max-md:px-5 max-md:pt-24 max-md:max-w-full"
        role="region"
        aria-label="Expert consultation section"
      >
        <img
          loading="lazy"
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/92e2137cae33e30b503efeed21c367afd2aa27e67e42fdce83650a39a0cabf46?placeholderIfAbsent=true&apiKey=7a62a3bc0ec34c60a1ee6236375d4957"
          class="object-cover h-[309px] absolute top-0 inset-0 size-full"
          alt="Background image for expert consultation section"
        />
        <!-- <span class="relative z-10">Talk to an industry expert</span> -->
        <div class="flex relative flex-col min-w-[240px] ">
                    <div class="flex absolute -bottom-3 -left-6 z-0 flex-col px-3 -pt-1 pb-0.5 h-[50px] w-[59px]"
                        role="presentation" aria-hidden="true">
                        <div class="flex shrink-0 w-full h-10 rounded-full"><img loading="lazy"
                            src="{{ asset('assets/icons/backdrop.png') }}"
                            alt="Quality Assurance icon" class="object-contain aspect-[1.2] w-[42px]" /></div>
                    </div>
                    <div class="z-0 text-3xl font-medium " role="heading" aria-level="2">Talk to an industry expert
                    </div>
                </div>
      </div>
    </div>
    <img
      loading="lazy"
      src="https://cdn.builder.io/api/v1/image/assets/TEMP/1745b5491186c3cb3a56997f389b1ebb0017b4e4434be3ba11a134cb2948512a?placeholderIfAbsent=true&apiKey=7a62a3bc0ec34c60a1ee6236375d4957"
      class="object-contain grow shrink self-stretch my-auto aspect-[1.28] min-w-[240px] w-[262px]"
      alt="Industry expertise illustration"
    />
  </div>
</div>

</div>
</div>
</x-layout>

