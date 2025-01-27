    <!-- Banner -->

    <div class="banner w-auto h-auto align-center bg-center relative">
      {{$image}}
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
                        class="flex flex-col justify-center px-5 py-5 mt-9 w-60 max-w-full text-base font-light leading-none text-blue-900 bg-white min-h-[52px] rounded-[40px] max-md:px-5 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-900"
                        aria-label="Get Started">
                        <div class="flex gap-2.5 px-10 items-center">
                            <span>Get Started</span>
                            <img loading="lazy"
                                src="{{ asset('assets/icons/arrow.png') }}"
                                alt="" class="object-contain z-10 shrink-0 self-start aspect-square w-[13px]"
                                aria-hidden="true" />
                        </div>
                    </button>
                </div>
                <nav class=" lg:flex flex-col self-center w-full lg:max-w-[300px] gap-2" aria-label="Quick Services Navigation">
                <div class="flex flex-col text-xs text-white" role="navigation" aria-label="Quick actions menu">
                    <div class="flex whitespace-nowrap ">
                        <div class="flex flex-col flex-1">
                        <a href="/booking" class="flex flex-col items-center" tabindex="0">
                            <img
                            loading="lazy"
                            src="{{ asset('assets/icons/booking.png') }}"
                            class="object-contain self-center w-10 rounded-none aspect-square"
                            alt="Book your service"
                            />
                            <div class="mt-1.5 text-[#003C97]">Booking</div>
                        </a>
                        </div>
                        <div class="flex flex-col flex-1">
                        <a href="/order" class="flex flex-col items-center" tabindex="0">
                            <img
                            loading="lazy"
                            src="{{ asset('assets/icons/order.png') }}"
                            class="object-contain self-center w-10 rounded-none aspect-square"
                            alt="Place an order"
                            />
                            <div class="mt-1.5 text-[#003C97]">Order</div>
                        </a>
                        </div>
                        <div class="flex flex-col flex-1">
                        <a href="/tracking" class="flex flex-col items-center" tabindex="0">
                            <img
                            loading="lazy"
                            src="{{ asset('assets/icons/tracking.png') }}"
                            class="object-contain self-center w-10 rounded-none aspect-square"
                            alt="Track your shipment"
                            />
                            <div class="mt-1.5 text-[#003C97]">Tracking</div>
                        </a>
                        </div>
                    </div>
                    <div class="flex gap-4 mt-5">
                        <div class="flex flex-col flex-1 whitespace-nowrap">
                        <a href="/quotation" class="flex flex-col items-center" tabindex="0">
                            <img
                            loading="lazy"
                            src="{{ asset('assets/icons/quotation.png') }}"
                            class="object-contain self-center w-10 rounded-none aspect-square"
                            alt="Get a price quote"
                            />
                            <div class="mt-1.5 text-[#003C97]">Quotation</div>
                        </a>
                        </div>
                        <div class="flex flex-col flex-1">
                        <a href="/contact" class="flex flex-col items-center" tabindex="0">
                            <img
                            loading="lazy"
                            src="{{ asset('assets/icons/call.png') }}"
                            class="object-contain self-center w-10 rounded-none aspect-square"
                            alt="Contact our support team"
                            />
                            <div class="mt-1.5 text-[#003C97]">Call us</div>
                        </a>
                        </div>
                        <div class="flex flex-col flex-1 whitespace-nowrap">
                        <a href="/proposal" class="flex flex-col items-center" tabindex="0">
                            <img
                            loading="lazy"
                            src="{{ asset('assets/icons/proposal.png') }}"
                            class="object-contain self-center w-10 rounded-none aspect-square"
                            alt="Request a business proposal"
                            />
                            <div class="mt-1.5 text-[#003C97]">Proposal</div>
                        </a>
                        </div>
                    </div>
                    </div>
                </nav>
            </div>
        </div>


    </div>