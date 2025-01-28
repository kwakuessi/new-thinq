@php
    $contactUs = [
        [
            'title' => 'Interested in doing business with us, we can help your business needs',
            'btnA' => 'Sales Enquiry',
            'btnB' => 'Get a quote',
            'icon' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/897ac7e5109bef23ffb30d2297ca85c689659800cf0680893ba778dbd246748d?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03'
        ],

        [
            'title' => 'Join us now to aid your supply chain and 
                                                                                                                                                                                                                                                                        distribution solutions',
            'btnA' => 'Partner now',
            'btnB' => 'Register',
            'icon' => ''
        ],

        [
            'title' => 'Customized call to expert professionals to assist with your business needs',
            'btnA' => 'Schedule a call',
            'btnB' => 'Register',
            'icon' => ''
        ],

        [
            'title' => 'Marketing support services for our distributors and partners',
            'btnA' => 'Support',
            'btnB' => 'Register',
            'icon' => ''
        ],

    ];


    $navlinks = [
        ['title' => 'Booking', 'icon' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/5ca1c0e9ff2726da7f2b6f5af227ca12d1d0ea9ed490b09b7ba8a981de06f73e?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03'],
        ['title' => 'Order', 'icon' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/5ca1c0e9ff2726da7f2b6f5af227ca12d1d0ea9ed490b09b7ba8a981de06f73e?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03'],
        ['title' => 'Tracking', 'icon' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/5ca1c0e9ff2726da7f2b6f5af227ca12d1d0ea9ed490b09b7ba8a981de06f73e?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03'],
        ['title' => 'Quotation', 'icon' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/5ca1c0e9ff2726da7f2b6f5af227ca12d1d0ea9ed490b09b7ba8a981de06f73e?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03'],
        ['title' => 'Call us', 'icon' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/5ca1c0e9ff2726da7f2b6f5af227ca12d1d0ea9ed490b09b7ba8a981de06f73e?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03'],
        ['title' => 'Proposal', 'icon' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/5ca1c0e9ff2726da7f2b6f5af227ca12d1d0ea9ed490b09b7ba8a981de06f73e?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03'],


    ];

    $helps = [
        [
            'title' => 'Partnership',
            'description' => 'Check our business opportunity across various industries',
            'btnA' => 'Login',
            'btnB' => 'Register',

        ],

        [
            'title' => 'Container sales',
            'description' => 'For more information about container sales and services',
            'btnA' => 'Book now',
            'btnB' => 'Contact',

        ],

        [
            'title' => 'Careers',
            'description' => 'Discover job vacancies, find out how to apply',
            'btnA' => 'Vacancies',
            'btnB' => 'Apply',

        ],


    ]
@endphp


<x-layout>
    <x-slot name="title">Partnership</x-slot>

    <!--  -->

    <section class='max-w-6xl mx-auto py-[127px] px-4 sm:px-6 lg:px-8'>
        <div class="flex flex-wrap pt-[105px] justify-between items-start text-blue-900" role="region"
            aria-label="Partner Testimonials">
            <div class="px-3 pt-0.5 pb-6 text-3xl w-fit" role="heading" aria-level="2">Partner Testimonials</div>
            <div class="text-xl font-light leading-7 w-[589px] max-md:max-w-full">
                We prioritize our partners and distributors, focusing on quality, affordability, and delivery of
                unmatched value and support through our seamless supply chain.
            </div>
        </div>
    </section>

    <!--  -->

    <section class='max-w-6xl mx-auto pt-[127px] px-4 sm:px-6 lg:px-8'>

        <div class='relative grid grid-cols-2  md:grid-cols-3 gap-5'>
            @foreach($contactUs as $contact)
                <div class="flex flex-col font-light max-w-[339px]">
                    <div class="flex flex-col pb-7 w-full rounded-xl border border-solid border-sky-950">
                        <img loading="lazy" src="{{URL::asset($contact['icon'])}}"
                            alt="Business collaboration visual representation"
                            class="object-contain w-full rounded-t-xl aspect-[1.52]" />
                        <div class="flex flex-col p-3 md:p-0 md:mt-7 md:ml-7 max-w-full ">
                            <div class="self-center text-xs leading-5 text-blue-900">
                                {{$contact['title']}}
                            </div>
                            <div class="flex flex-col justify-center  mt-2.5 w-full text-xs leading-tight">
                                <div class="block space-y-2 md:flex gap-5 items-center w-full">
                                    <button
                                        class="flex flex-col justify-center self-stretch px-2.5 py-2.5 my-auto text-white bg-sky-950 min-h-[30px] rounded-[40px] w-fit"
                                        aria-label={{$contact['btnA']}}>
                                        <div class="flex justify-between items-end w-fit">
                                            <div class="w-fit">{{$contact['btnA']}}</div>
                                            <img loading="lazy"
                                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/a0959f77e258093ffffa7a10a43f3aa8312c99671bad22f503640e7c622d7766?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                                alt="" class="object-contain shrink-0 w-2 aspect-square" />
                                        </div>
                                    </button>
                                    <button
                                        class="flex flex-col justify-center self-stretch px-3 py-2.5 my-auto border border-solid border-sky-950 min-h-[30px] rounded-[40px] text-sky-950 w-fit"
                                        aria-label={{$contact['btnB']}}>
                                        <div class="flex gap-0.5 items-end">
                                            <div class="w-fit">{{$contact['btnB']}}</div>
                                            <img loading="lazy"
                                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/f5c2d851d41e43f36873e81d938bda7ea2e451313a4f062b4b681871f3900c88?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                                alt="" class="object-contain shrink-0 w-2 aspect-square" />
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <nav class="hidden col-span-2 justify-self-center md:flex flex-wrap gap-5 items-start self-stretch my-auto w-[177px]"
                role="navigation" aria-label="Quick actions">
                <ul class="grid grid-cols-3 gap-4">
                    @foreach($navlinks as $navlink)
                        <button class="flex flex-col grow shrink w-[38px]" aria-label={{$navlink['title']}}>
                            <div
                                class="flex gap-2.5 items-center self-center px-3 py-2.5 w-10 rounded-md border border-[#003C97] border-solid min-h-[40px]">
                                <img loading="lazy" src="{{URL::asset($navlink['icon'])}}" alt={{$navlink['title']}}
                                    class="object-contain self-stretch my-auto aspect-[0.85] w-[17px]" />
                            </div>
                            <span class="mt-1.5 text-xs text-center text-[#003C97]">{{$navlink['title']}}</span>
                        </button>

                    @endforeach
                </ul>


            </nav>
        </div>


    </section>

    <!--  -->

    <section class='max-w-6xl mx-auto pt-20 px-4 sm:px-6 lg:px-8'>
        <div class="flex flex-wrap pt-[105px] justify-between items-start text-blue-900" role="region"
            aria-label="Service request">
            <div class="px-3 pt-0.5 pb-6 text-3xl w-fit" role="heading" aria-level="2">Service request</div>
            <div class="text-xl font-light leading-7 w-[589px] max-md:max-w-full">
                Request updates and more information of our customized services tailored specific to your business
                needs.
            </div>
        </div>

        <div class='flex justify-center w-full'>
            <img src="{{URL::asset('assets/sphere-request.png')}}" alt="" class='aspect-square lg:size-80'>
        </div>
    </section>

    <!-- form -->

    <section class='max-w-6xl mx-auto pt-20 px-4 sm:px-6 lg:px-8'>
        <div class="flex flex-col">
            <div class="px-3 pt-0.5 pb-6 max-w-full text-3xl text-blue-900 w-[183px]" role="heading" aria-level="2">
                Contact us
            </div>
            <div class="flex flex-wrap gap-10 items-center mt-12 w-full max-md:mt-10 max-md:max-w-full">
                <div class="flex flex-col grow shrink self-stretch my-auto min-w-[240px] w-[259px]">
                    <div class="flex gap-2.5 items-center self-start text-base font-light text-sky-900">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/bc2dbe5e1f7d96b9961c5d9abba8c72c98c257feae0f5f7b0091ec31efd5346b?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="Business inquiries icon"
                            class="object-contain shrink-0 self-stretch my-auto aspect-square w-[13px]" />
                        <div class="self-stretch my-auto w-[143px]">Business inquiries</div>
                    </div>
                    <a href="mailto:contact@thinqsphere.com"
                        class="mt-2 text-2xl leading-none text-blue-900 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2">
                        contact@thinqsphere.com
                    </a>
                </div>
                <div class="flex flex-col grow shrink self-stretch my-auto min-w-[240px] w-[262px]">
                    <div class="flex gap-2.5 items-end self-start text-base font-light text-sky-900">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/acad6c69b596933e6643b2a7d07c4e39410dc4aa9e02053cc3f7b2282f0f762e?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="Customer support icon" class="object-contain shrink-0 aspect-square w-[13px]" />
                        <div class="w-[125px]">Custom support</div>
                    </div>
                    <a href="mailto:support@thinqsphere.com"
                        class="mt-2 text-2xl leading-none text-blue-900 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2">
                        support@thinqsphere.com
                    </a>
                </div>
                <div class="flex flex-col grow shrink self-stretch my-auto whitespace-nowrap min-w-[240px] w-[198px]">
                    <div class="flex gap-2.5 items-center self-start text-base font-light text-sky-900">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/852cb7a2cb01cb89ee5e47afa7972b3fe3901845160c18c4e7d587893242b7d4?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="Careers icon"
                            class="object-contain shrink-0 self-stretch my-auto aspect-square w-[13px]" />
                        <div class="self-stretch my-auto w-[87px]">Careers</div>
                    </div>
                    <a href="mailto:careers@sphere.com"
                        class="mt-2 text-2xl leading-none text-blue-900 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2">
                        careers@sphere.com
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--  -->

    <section class='max-w-6xl mx-auto pt-20 px-4 sm:px-6 lg:px-8'>

        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="flex flex-col text-blue-900 max-w-[291px]">
                <h2 tabindex="0" class="px-3 pt-0.5 pb-4 w-full text-3xl">Need more help?</h2>
                <div class="flex flex-col self-center mt-5 max-w-full w-[265px]">
                    <p class="text-xs">Have questions surrounding the industries?</p>
                    <p class="mt-2.5 text-sm font-light leading-5">
                        <span class="font-medium">ThinQSphere</span>
                        conduct business with importers, distributors, wholesalers and
                        institutions from diverse industries.
                    </p>
                </div>
            </div>

            @foreach($helps as $help)
                <div class="flex flex-col max-w-[209px]" role="region" aria-label="Container Sales Information">
                    <div class="flex flex-col w-full text-blue-900">
                        <h2 class="text-xl leading-none">{{$help['title']}}</h2>
                        <div class="mt-4 text-sm font-light leading-5">
                            {{$help['description']}}
                        </div>
                    </div>
                    <div class="flex gap-5 items-center mt-7 w-full text-sm font-light leading-none">
                        <a href="#book-now"
                            class="flex flex-col self-stretch my-auto text-white rounded-[40px] w-[95px] focus:outline-none focus:ring-2 focus:ring-blue-400"
                            role="button" aria-label={{$help['btnB']}}>
                            <div
                                class="flex flex-col justify-center px-2 py-2.5 w-full bg-sky-950 min-h-[34px] rounded-[40px]">
                                <div class="flex gap-1 justify-between items-center w-[79px]">
                                    <div class="self-stretch my-auto w-[66px]">{{$help['btnA']}}</div>
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/96f822f0fdab875cacfaeb6352c9c7516041fe948d7c89502741c15eed57a6cd?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                        class="object-contain shrink-0 self-stretch my-auto aspect-[1.12] w-[9px]" alt="" />
                                </div>
                            </div>
                        </a>
                        <a href="#contact"
                            class="flex flex-col justify-center self-stretch px-3.5 py-2.5 my-auto whitespace-nowrap border border-solid border-sky-950 min-h-[34px] rounded-[40px] text-sky-950 w-[95px] focus:outline-none focus:ring-2 focus:ring-blue-400"
                            role="button" aria-label={{$help['btnA']}}>
                            <div class="flex gap-1 items-center">
                                <div class="self-stretch my-auto w-[55px]">{{$help['btnB']}}</div>
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/ee5e6f92863cb3d677473215edb7525c4ab9cf521d4e466b991309ba26608014?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                    class="object-contain shrink-0 self-stretch my-auto aspect-[1.12] w-[9px]" alt="" />
                            </div>
                        </a>
                    </div>
                </div>

            @endforeach
        </ul>


        <div class="flex flex-wrap items-start">
            <div class="flex flex-wrap items-end min-w-[240px] max-md:max-w-full">
                <div class="flex flex-col justify-center px-12 py-14 rounded-none min-w-[240px] w-[382px] max-md:px-5">
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/d39edeafa207ce4ba62c326ad2c4d6026f810d7b6a57fb711be30fa3329d85c8?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                        class="object-contain w-full aspect-[1.07] rounded-[119px]" alt="Gallery image 1" role="img" />
                </div>
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/91b283afed831da58f2761a8c319fb9ea9a19ec63ae7773572e336e6c2f3e2a4?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                    class="object-contain shrink-0 aspect-[1.06] rounded-[109px] w-[196px]" alt="Gallery image 2"
                    role="img" />
            </div>
            <div class="flex relative flex-col items-start min-w-[240px] w-[269px]">
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/bc6712ce2d761e926a45092e1c090e505898862318b0c93bd5fef9cba483bf71?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                    class="object-contain z-0 max-w-full aspect-[1.08] rounded-[197px] w-[235px]" alt="Gallery image 3"
                    role="img" />
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/a5a5f48657a0da2a6b9cdb09f6558cd1351f47a99113d21c71dfa85634feadeb?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                    class="object-contain absolute z-0 max-w-full aspect-[1.08] bottom-[-248px] h-[250px] right-[-141px] rounded-[125px] w-[269px]"
                    alt="Gallery image 4" role="img" />
            </div>
        </div>

        <div class="flex flex-wrap lg:justify-between gap-10 items-end">
            <div class="text-xl font-light leading-7 text-sky-800 w-[596px] max-md:max-w-full">
                We provide innovative solutions, whiles delivering high-quality products and services across diverse
                industries, redefining global supply chains with efficiency.
                <br />
                <br />
                Browse our key enterprises and experience 360 degree supply chain support in your industry.
            </div>
            <div class="flex gap-0.5 items-center text-2xl font-medium text-blue-900 min-w-[240px]">
                <div>Business newsletter</div>
                <div class="object-contain shrink-0 self-stretch my-auto w-3 aspect-square" tabindex="0">
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/38a19bb014b07a04393a5c771a9aade1ea6abcad627971bb364096be844006db?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                        alt="Submit Business Newsletter" />
                </div>
                </d>
            </div>

    </section>

    <!-- world map -->

    <section class='relative pt-[138px]'>
        <div class="flex flex-col pt-12">
            <div
                class="flex relative flex-col items-center px-16 pb-56 w-full min-h-[462px] max-md:px-5 max-md:pb-24 max-md:max-w-full">
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/7c60f59d856a5d4f4435e0c578caf8e6a2deb18bca272711fc5f4d3068965b0f?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                    alt="" class="object-cover absolute inset-0 size-full" />
                <div class="relative z-10 mt-0 mb-0 w-full max-w-[939px] max-md:mb-2.5 max-md:max-w-full">
                    <div class="flex gap-5 max-md:flex-col">
                        <div class="flex flex-col w-[37%] max-md:ml-0 max-md:w-full">
                            <div class="flex relative gap-0.5 items-start mt-1 max-md:mt-10">
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/2c20b75add7465cb8ec128cf4d6b52f751c2f7e873637141019e5b153354b78f?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                    alt="Map of North, South America"
                                    class="object-contain shrink-0 aspect-[0.32] w-[66px]" />
                                <div class="flex flex-col min-w-[240px] w-[259px]">
                                    <div class="text-2xl leading-none text-sky-900">North, South America</div>
                                    <div class="mt-1.5 text-base font-light leading-none text-blue-900">CA California,
                                        Mexico, Sao Paulo</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col ml-5 w-[63%] max-md:ml-0 max-md:w-full">
                            <div class="flex relative flex-col w-full max-md:mt-10 max-md:max-w-full">
                                <div class="flex items-start self-end max-md:mr-2.5">
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/54b39465e856f9b3515b88e54f461377155451b23c6b9a1cccc19a93823f36f8?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                        alt="Map of Europe" class="object-contain shrink-0 aspect-[0.52] w-[66px]" />
                                    <div class="flex flex-col min-w-[240px] w-[259px]">
                                        <div class="text-2xl leading-none text-sky-900">Europe</div>
                                        <div class="mt-1.5 text-base font-light leading-none text-blue-900">London,
                                            United Kingdom</div>
                                    </div>
                                </div>
                                <div class="z-10 mt-0 w-full max-md:max-w-full">
                                    <div class="flex gap-5 max-md:flex-col">
                                        <div class="flex flex-col w-[61%] max-md:ml-0 max-md:w-full">
                                            <div class="flex items-start mt-3.5 max-md:mt-8">
                                                <img loading="lazy"
                                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/036dfacec61ae843ab06b09c591b9af78d25000bf9c8e3710bfed3eb6d5b3f8a?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                                    alt="Map of Africa, Middle East"
                                                    class="object-contain shrink-0 aspect-[0.38] w-[66px]" />
                                                <div class="flex flex-col min-w-[240px] w-[259px]">
                                                    <div class="text-2xl leading-none text-sky-900">Africa, Middle East
                                                    </div>
                                                    <div class="mt-1.5 text-base font-light leading-none text-blue-900">
                                                        Greater Accra, Dubai</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col ml-5 w-[39%] max-md:ml-0 max-md:w-full">
                                            <div class="flex items-start max-md:mt-5">
                                                <img loading="lazy"
                                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/b8cc8bbdceff748fff3ba96b2954f65f75e90df68b2cfdb6bc39a43df522e72e?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                                    alt="Map of Asia Region"
                                                    class="object-contain shrink-0 aspect-[0.47] w-[66px]" />
                                                <div class="flex flex-col w-36">
                                                    <div class="text-2xl leading-none text-sky-900">Asia Region</div>
                                                    <div class="mt-1.5 text-base font-light leading-none text-blue-900">
                                                        Guangzhou, China</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='absolute bottom-10 w-full items-center left-0 right-0 max-w-6xl mx-auto pt-20 px-4 sm:px-6 lg:px-8'>
            <div class="flex flex-wrap gap-10 items-center justify-between" role="region"
                aria-label="Company Statistics">
                <div
                    class="self-stretch my-auto text-4xl font-light leading-10 text-neutral-400 w-[546px] max-md:max-w-full">
                    <span class="text-blue-900">Beyond logistics,</span>
                    we delivered in over
                    <span class="text-blue-900">75+ countries</span>
                    worldwide
                </div>
                <div class="flex flex-col self-stretch my-auto w-[135px]" role="group"
                    aria-label="Advanced Systems Statistics">
                    <div class="text-6xl leading-none text-blue-900 max-md:text-4xl">250+</div>
                    <div class="mt-1 text-sm tracking-wide leading-6 text-neutral-400">
                        Advanced Systems
                    </div>
                </div>
                <div class="flex flex-col self-stretch my-auto w-[135px]" role="group"
                    aria-label="Customer Trust Statistics">
                    <div class="text-6xl leading-none text-blue-900 max-md:text-4xl">650+</div>
                    <div class="mt-1 text-sm tracking-wide leading-6 text-neutral-400">
                        Customer Trust
                    </div>
                </div>
            </div>
        </div>

    </section>

</x-layout>