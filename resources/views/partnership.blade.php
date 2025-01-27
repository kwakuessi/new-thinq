@php
    $chooseus = [
        [
            'title' => 'Quality Assurance',
            'description' => 'We ensure that every procurement has strict quality checks and assurances
                                                                                                                                                                                                                                                                        with rigorous testing at every production stage.',
            'icon' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/3597c50efd05fe3a1222d2bb768217196ed1538d74f54a3ff4346bea1ee1b15f?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03'
        ],

        ['title' => 'Recognized Brands', 'description' => 'Globally recognized brands that meet international and regional standards, complying with industry standards, and certifications to validate quality.', 'icon' => ''],

        [
            'title' => 'Transparent Manufacturing',
            'description' => 'Open communication about manufacturing and sourcing methods, ensuring ethical and sustainable supply chains.',
            'icon' => ''
        ],

        ['title' => 'Customization', 'description' => 'Offering customization with unique configurations or features tailored to meet specific needs or preferences of customers.', 'icon' => ''],

        ['title' => 'Innovation & Technology', 'description' => 'Ensuring that manufacturers or producers utilizes cutting edge technology in their production processes to meet evolving customer demands.', 'icon' => ''],

        ['title' => 'Cost-Effective Solutions', 'description' => 'Offering the best balance of quality and cost through the implementation of cost-efficient productions with value-added services.', 'icon' => ''],

        ['title' => 'Wide Range Industries', 'description' => 'Source products from diverse range of industries, ensuring superior quality and affordability.', 'icon' => ''],

        ['title' => 'Reliable Delivery', 'description' => 'Streamlined logistics to ensure on-time delivery with flexible return and exchange policies.', 'icon' => ''],


    ];



    $Generals = [
        ['title' => 'Info Inquiry', 'icon' => ''],
        [
            'title' => 'Eligibility
                                                                                                Assessment',
            'icon' => ''
        ],
        ['title' => 'Contract Agreement', 'icon' => ''],
        ['title' => 'Orientation', 'icon' => ''],
        ['title' => 'Account Setup', 'icon' => ''],
        [
            'title' => 'Order Placement',
            'icon' => ''
        ],
        [
            'title' => 'Distributor Support',
            'icon' => ''
        ],


    ];

    $GeneralSuppliers = [
        ['title' => 'Info Inquiry', 'icon' => ''],
        [
            'title' => 'Legal & Compliance',
            'icon' => ''
        ],
        [
            'title' => 'Financial
                        Assessment',
            'icon' => ''
        ],
        [
            'title' => 'Supplier
                        Assessment',
            'icon' => ''
        ],
        ['title' => 'Risk Review', 'icon' => ''],
        [
            'title' => 'Contract
                        Agreement',
            'icon' => ''
        ],
        [
            'title' => 'System
                        Onboarding',
            'icon' => ''
        ],
    ];

    $HealthPharmas = [
        [
            'title' => 'Manufacturing
                Agreement',
            'icon' => ''
        ],
        [
            'title' => 'Factory
                Inspection',
            'icon' => ''
        ],
        [
            'title' => 'Dossier
                Preparation',
            'icon' => ''
        ],
        [
            'title' => 'Product
                Packaging Design',
            'icon' => ''
        ],
        [
            'title' => 'Registration
                Submission',
            'icon' => ''
        ],
        [
            'title' => 'Registration
                Approval',
            'icon' => ''
        ],
        [
            'title' => 'System
                Onboarding',
            'icon' => ''
        ],
    ];
@endphp

<x-layout>
    <x-slot name="title">Partnership</x-slot>

    <!-- Hero section e-commerce-banner -->

    <section>
        <div class=" flex-col ">
            <div
                class=" relative items-center px-16 py-28 w-full min-h-[530px] max-md:px-5 max-md:py-24 max-md:max-w-full">
                <img loading="lazy" src="{{URL::asset('assets/thinq-partnership.png')}}"
                    alt="Cargo ship at sea representing international logistics"
                    class="object-cover absolute inset-0 size-full" />
                <div class=" relative  mb-0 max-md:mb-2.5 max-md:max-w-full">
                    <div
                        class=" flex-col self-stretch my-auto font-light text-white min-w-[240px] w-4xl max-md:max-w-full">
                        <h1 class="text-5xl leading-[58px] max-md:max-w-full max-md:text-4xl max-md:leading-[54px]">
                            A collaborative business model <br />
                            that creates reliable relationship
                        </h1>
                        <p class="mt-5 text-xl leading-8 max-md:max-w-full">
                            A unique business model, creating value for our manufacturers
                            <br />
                            and distributors, simplified
                        </p>
                        <button
                            class="flex flex-col justify-center px-8 py-5 mt-5 w-40 max-w-full text-base leading-none text-blue-900 bg-white min-h-[52px] rounded-[40px] max-md:px-5"
                            aria-label="Book now">
                            <div class="flex gap-2 items-center">
                                <span class="self-stretch my-auto w-[85px]">Partner us</span>
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/883f4a0eb9bff0b101aee0b2ee1ed99698bdb73b87738158384799f33d4ad162?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                    alt="" class="object-contain shrink-0 self-stretch my-auto w-3 aspect-square" />
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Chose us -->

    <section class='max-w-6xl mx-auto mt-[80px] px-4 sm:px-6 lg:px-8'>
        <div class="flex flex-wrap justify-between items-start text-blue-900" role="region"
            aria-label="Choose Us Section">
            <div class="px-3 pt-0.5 pb-6 text-3xl w-[173px]" role="heading" aria-level="2">Choose us</div>
            <div class="text-xl font-light leading-7 w-[589px] max-md:max-w-full">
                <span class="font-medium">ThinQSphere</span>
                has forged strategic partnerships with suppliers and distributors and form
                collaborative policies that foster balanced distribution responsibilities,
                enabling us to work closely with our partners. Together, we deliver
                high-demand products that drive mutual success and enhance our competitive
                advantage.
            </div>
        </div>


        <div class="flex flex-wrap gap-px mt-[41px] items-start font-medium">
            <div class="text-3xl leading-8 text-sky-950 w-[470px] max-md:max-w-full" role="heading" aria-level="2">
                <span class="text-blue-900">Become a partner enjoy seamless support,</span>
                <span class="text-zinc-500">that enhances your business success</span>
            </div>
            <div class="flex gap-0.5 items-center py-5 lg:py-0 lg:pl-4 text-2xl text-center text-blue-900 min-w-[240px]"
                role="button" tabindex="0" aria-label="Subscribe to business newsletter">
                <div class="self-stretch my-auto w-[238px]">Business newsletter</div>
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/38a19bb014b07a04393a5c771a9aade1ea6abcad627971bb364096be844006db?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                    class="object-contain shrink-0 self-stretch my-auto w-3 aspect-square" alt="" aria-hidden="true" />
            </div>
        </div>

    </section>


    <!--  -->

    <section class='max-w-6xl mx-auto mt-[80px] px-4 sm:px-6 lg:px-8 '>
        <ul class="grid grid-cols-2 md:grid-cols-3  gap-5 md:gap-10 mt-10" role="list" aria-label="Choose us">
            @foreach($chooseus as $us)

                <div class="flex flex-col max-w-[270px]" role="article">
                    <img loading="lazy" src="{{URL::asset($us['icon'])}}" class="object-contain aspect-[1.14] w-[42px]"
                        alt={{$us['title']}} />
                    <div class="flex flex-col mt-1.5 w-full">
                        <h2 class="text-xl font-medium leading-relaxed text-blue-900">
                            {{$us['title']}}
                        </h2>
                        <p class="mt-5 text-base font-light leading-6 text-sky-800">
                            {{$us['description']}}
                        </p>
                    </div>
                </div>
            @endforeach
        </ul>

        <div class="flex justify-end">
            <div class="flex flex-col justify-center px-6 py-4 text-base font-light leading-none text-white bg-sky-950 max-w-[224px] rounded-[40px]"
                role="button" tabindex="0" aria-label="Request Proposal Button" onclick="handleRequestProposal()">
                <div class="flex gap-2 items-center">
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/5749f071e34ba4eab6cf45006dc5994a6c5b7fd503a314029f717f20c53c10bf?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                        class="object-contain shrink-0 self-stretch my-auto aspect-[0.86] w-[19px]"
                        alt="Request Proposal Icon" />
                    <div class="self-stretch my-auto w-[135px]">Request Proposal</div>
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/5870a40e4e29d8486975c6912c28260144c1c53667870c893c1da4f7916b8b24?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                        class="object-contain shrink-0 self-stretch my-auto aspect-square w-[9px]" alt="Arrow Icon" />
                </div>
            </div>
        </div>

    </section>


    <!-- Partnership process -->
    <section class='max-w-6xl mx-auto mt-[80px] px-4 sm:px-6 lg:px-8'>
        <div class="flex flex-wrap justify-between items-start text-blue-900" role="region"
            aria-label="Partnership process">
            <div class="px-3 pt-0.5 pb-6 text-3xl w-fit" role="heading" aria-level="2">Partnership process</div>
            <div class="text-xl font-light leading-7 w-[589px] max-md:max-w-full">
                We have effectively registered a wide range of expert manufacturers worldwide, spanning diverse
                industries. Our partners and distributors count on specialized knowledge of our regulatory affairs team,
                who streamline the registration process with their expertise.
            </div>
        </div>


        <div class='flex flex-wrap justify-between items-start mt-[84px] max-w-6xl mx-auto px-4 sm:px-6 lg:px-8'>
            <ol class="relative border-s border-[#1D4289]">

                <li class="mb-10 ms-6">
                    <span class="absolute flex items-center justify-center w-6 h-6  rounded-full -start-3 ">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/9e8218e9ff5bea711e2eae223202d441456164c11f7887172da8a69121bec214?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="General Information Icon"
                            class="object-contain shrink-0 self-stretch my-auto aspect-[1.18] w-[59px]" />
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 ">General
                    </h3>
                </li>


                @foreach($Generals as $General)

                    <li class="mb-10 ms-4">
                        <div class="absolute w-3 h-3 bg-[#1D4289] rounded-full mt-1.5 -start-1.5 border ">
                        </div>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 leading-none ">{{$General['title']}}</h3>
                    </li>

                @endforeach

            </ol>

            <ol class="relative border-s border-[#1D4289]">

                <li class="mb-10 ms-6">
                    <span class="absolute flex items-center justify-center w-6 h-6  rounded-full -start-3 ">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/9e8218e9ff5bea711e2eae223202d441456164c11f7887172da8a69121bec214?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="General Information Icon"
                            class="object-contain shrink-0 self-stretch my-auto aspect-[1.18] w-[59px]" />
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 ">General
                    </h3>
                </li>


                @foreach($GeneralSuppliers as $GeneralSupplier)

                    <li class="mb-10 ms-4">
                        <div class="absolute w-3 h-3 bg-[#1D4289] rounded-full mt-1.5 -start-1.5 border ">
                        </div>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 leading-none ">{{$GeneralSupplier['title']}}
                        </h3>
                    </li>

                @endforeach

            </ol>

            <ol class="relative border-s border-[#1D4289]">

                <li class="mb-10 ms-6">
                    <span class="absolute flex items-center justify-center w-6 h-6  rounded-full -start-3 ">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/9e8218e9ff5bea711e2eae223202d441456164c11f7887172da8a69121bec214?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="General Information Icon"
                            class="object-contain shrink-0 self-stretch my-auto aspect-[1.18] w-[59px]" />
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 ">General
                    </h3>
                </li>


                <div>
                    @foreach($HealthPharmas as $HealthPharma)

                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-[#1D4289] rounded-full mt-1.5 -start-1.5 border ">
                            </div>
                            <h3 class="mb-1 text-lg font-semibold text-gray-900 leading-none ">{{$HealthPharma['title']}}
                            </h3>
                        </li>

                    @endforeach
                </div>

            </ol>
        </div>
    </section>

    <!--  -->

    <section class='max-w-6xl mx-auto mt-[80px] px-4 sm:px-6 lg:px-8'>
        <div class="flex flex-wrap items-end">
            <div class="flex flex-col text-blue-900 min-w-[240px] w-[633px] max-md:max-w-full">
                <h2 class="text-3xl leading-8 max-md:max-w-full">
                    Join us to elevate the standards of your business
                </h2>
                <div class="mt-8 text-xl font-light leading-7 max-md:max-w-full">
                    We deliver exceptional value to our partner distributors by prioritizing
                    high-quality affordable products, tailored to specific market solutions.
                    <br />
                    <br />
                    Join us and become a part of our well-established community of
                    distributors and suppliers serving diverse industries.
                </div>
            </div>
            <button
                class="flex flex-col justify-center px-9 py-3 text-xl font-light text-white bg-sky-950 min-h-[56px] rounded-[40px] w-[200px] max-md:px-5"
                aria-label="Get Started">
                <div class="flex gap-1 items-center">
                    <span class="self-stretch my-auto w-[114px]">Get Started</span>
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/8a7a422d067ecd96584304eed689043d6b053a53ef8950869f6f21d7a25a8a4f?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                        class="object-contain shrink-0 self-stretch my-auto w-3 aspect-square" alt=""
                        aria-hidden="true" />
                </div>
            </button>
        </div>
    </section>



    <!-- World map -->

    <div class="flex flex-col mt-[118px]" role="region" aria-label="Logistics Statistics">
        <div
            class="z-10 mt-0   px-4 lg:ml-24 text-4xl font-light leading-10 text-neutral-400 w-[638px] max-md:max-w-full">
            <span class="text-blue-900">Simplified supplier distributorship , we’ve</span>
            supplied partners in over
            <span class="text-blue-900">35+ countries</span>
            worldwide
        </div>
        <div class="flex relative flex-col items-center px-20 pt-14 w-full min-h-[462px] max-md:px-5 max-md:max-w-full">
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/7c60f59d856a5d4f4435e0c578caf8e6a2deb18bca272711fc5f4d3068965b0f?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                class="object-cover absolute inset-0 size-full" alt="" aria-hidden="true" />
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/63651415c84bc7a8550f1004fe22ae4ad78405c7f473684d93a59b15a417e0eb?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                class="object-contain  z-10 w-full aspect-[3.58] max-w-[910px] max-md:max-w-full"
                alt="Logistics worldwide delivery map" />
            <div
                class="flex max-w-4xl mx-auto relative z-20 flex-wrap gap-10 justify-between items-center mt-20 w-full  max-md:mt-10 max-md:max-w-full">
                <div class="flex gap-10 items-center self-stretch my-auto min-w-[240px]">
                    <div class="flex flex-col self-stretch my-auto w-[135px]">
                        <div class="text-6xl leading-none text-blue-900 max-md:text-4xl"
                            aria-label="310+ plus Registered Partners">
                            310+
                        </div>
                        <div class="mt-1 text-sm tracking-wide leading-6 text-neutral-400">
                            Registered Partners
                        </div>
                    </div>
                    <div class="flex flex-col self-stretch my-auto w-[140px]">
                        <div class="text-6xl leading-none text-blue-900 max-md:text-4xl"
                            aria-label="580 plus customers trust us">
                            580+
                        </div>
                        <div class="mt-1 text-sm tracking-wide leading-6 text-neutral-400">
                            Manufacturers
                        </div>
                    </div>
                </div>
                <div
                    class="flex gap-10 items-center self-stretch my-auto text-base font-light leading-loose min-w-[240px]">
                    <button
                        class="flex gap-1 items-end px-7 pt-2.5 pb-5 w-36 text-white bg-sky-950 min-h-[46px] rounded-[40px] max-md:px-5"
                        aria-label="Book now">
                        <span>Partner us</span>
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/ed6bbd871148fba6e924192815b4c706b11659efef4609ac0676a37618cbd8be?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            class="object-contain shrink-0 w-2 aspect-[1.14]" alt="" aria-hidden="true" />
                    </button>
                    <button
                        class="flex gap-0.5 items-end px-5 pt-2.5 pb-5 w-36 whitespace-nowrap border border-solid border-sky-950 min-h-[46px] rounded-[40px] text-sky-950 max-md:px-5"
                        aria-label="Support">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/e5c78093d28fe80721e154d30cf71422e6a2acd686436fd53a10124f3270208b?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            class="object-contain shrink-0 aspect-square w-[15px]" alt="" aria-hidden="true" />
                        <span>Support</span>
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/ee8158c2c2cbecbda19770cf4541cabc834bf7971dc42ef6070a185b264a2508?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            class="object-contain shrink-0 aspect-square w-[7px]" alt="" aria-hidden="true" />
                    </button>
                </div>
            </div>
        </div>
    </div>

</x-layout>