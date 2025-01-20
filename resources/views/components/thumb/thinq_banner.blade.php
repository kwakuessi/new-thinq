    <!-- Banner -->

    <div class="banner w-auto h-auto align-center bg-center bg-home-bg">
      {{$image}}
        <img class="w-full h-full left-0 top-0 absolute object-cover -z-10"
            src="{{ asset('assets/banners/procurement-banner.png') }}" />

        <div class="flex flex-col justify-center px-24 py-28 max-md:px-5 max-md:py-24 place-items-center" role="region"
            aria-label="Procurement Services Introduction">
            <div class="flex flex-wrap gap-10 justify-between items-start max-w-full w-[1089px]">
                <div class="flex flex-col min-w-[240px] w-[645px] max-md:max-w-full">
                    <div class="flex flex-col w-full max-md:max-w-full">
                        <h1
                            class="text-5xl text-sky-800 leading-[60px] max-md:max-w-full max-md:text-4xl max-md:leading-[56px]">
                            {{ $title }}
                        </h1>
                        <p class="mt-9 text-2xl font-light leading-10 text-blue-900 max-md:max-w-full">
                          {{ $content }}
                        </p>
                    </div>
                    <button
                        class="flex flex-col justify-center px-7 py-5 mt-9 w-60 max-w-full text-base font-light leading-none text-blue-900 bg-white min-h-[52px] rounded-[40px] max-md:px-5 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-900"
                        aria-label="Get Started">
                        <div class="flex gap-2.5 w-full items-center">
                            <span>Get Started</span>
                            <img loading="lazy"
                                src="{{ asset('assets/icons/arrow.png') }}"
                                alt="" class="object-contain z-10 shrink-0 self-start aspect-square w-[13px]"
                                aria-hidden="true" />
                        </div>
                    </button>
                </div>
                <nav class="hidden lg:flex flex-col items-center w-[58px]" aria-label="Quick Services Navigation">
                    <div
                        class="flex flex-col pb-1.5 text-xs font-light text-blue-900 whitespace-nowrap rounded-none w-[50px]">
                        <button
                            class="flex shrink-0 w-full bg-gray-100 rounded-md border border-blue-900 border-solid h-[50px] hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-900"
                            aria-label="Booking Service"></button>
                        <div class="mt-1.5 max-md:mr-1">Booking</div>
                    </div>
                    <div class="flex flex-col pb-6 mt-5 rounded-none w-[50px]">
                        <button
                            class="flex shrink-0 w-full bg-gray-100 rounded-md border border-blue-900 border-solid h-[50px] hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-900"
                            aria-label="Service Option"></button>
                    </div>
                    <div
                        class="flex flex-col pb-1.5 mt-5 text-xs font-light text-blue-900 whitespace-nowrap rounded-none w-[50px]">
                        <button
                            class="flex shrink-0 w-full bg-gray-100 rounded-md border border-blue-900 border-solid h-[50px] hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-900"
                            aria-label="Tracking Service"></button>
                        <div class="mt-1.5 max-md:mr-1">Tracking</div>
                    </div>
                    <div
                        class="flex flex-col px-px pb-2 mt-5 text-xs font-light text-blue-900 whitespace-nowrap rounded-none w-[58px]">
                        <button
                            class="flex shrink-0 w-full bg-gray-100 rounded-md border border-blue-900 border-solid h-[50px] hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-900 max-md:mr-0.5"
                            aria-label="Quotation Service"></button>
                        <div class="mt-1">Quotation</div>
                    </div>
                    <div
                        class="flex flex-col px-0.5 pb-1.5 mt-5 text-xs font-light leading-3 text-center text-blue-900 whitespace-nowrap rounded-none w-[57px]">
                        <button
                            class="flex shrink-0 w-full bg-gray-100 rounded-md border border-blue-900 border-solid h-[50px] hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-900 max-md:mr-0.5"
                            aria-label="Customer Services"></button>
                        <div class="mt-1.5">
                            Customer
                            <br />
                            Services
                        </div>
                    </div>
                </nav>
            </div>
        </div>


    </div>