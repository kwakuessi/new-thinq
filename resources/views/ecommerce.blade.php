<x-layout>
    <x-slot name="title">Ecommerce</x-slot>

    <!-- Hero section e-commerce-banner -->

    <section>
        <div class=" flex-col ">
            <div
                class=" relative items-center px-16 py-28 w-full min-h-[530px] max-md:px-5 max-md:py-24 max-md:max-w-full">
                <img loading="lazy" src="{{URL::asset('assets/e-commerce-banner.png')}}"
                    alt="Cargo ship at sea representing international logistics"
                    class="object-cover absolute inset-0 size-full" />
                <div class=" relative  mb-0 max-md:mb-2.5 max-md:max-w-full">
                    <div
                        class=" flex-col self-stretch my-auto font-light text-white min-w-[240px] w-4xl max-md:max-w-full">
                        <h1 class="text-5xl leading-[58px] max-md:max-w-full max-md:text-4xl max-md:leading-[54px]">
                            E-commerce made Effortless, <br />
                            Growth Guaranteed
                        </h1>
                        <p class="mt-5 text-xl leading-8 max-md:max-w-full">
                            Buy effortlessly with a catalog style of e-commerce and experience <br />
                            a network of products from carefully sourced and expert manufacturers
                        </p>
                        <button
                            class="flex flex-col justify-center px-8 py-5 mt-5 w-40 max-w-full text-base leading-none text-blue-900 bg-white min-h-[52px] rounded-[40px] max-md:px-5"
                            aria-label="Book now">
                            <div class="flex gap-2 items-center">
                                <span class="self-stretch my-auto w-[75px]">Book now</span>
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


    <!-- Nav -->

    <nav class="grid mt-[96px] grid-cols-2 px-4 lg:flex justify-center max-w-6xl mx-auto flex-wrap gap-8 items-center text-sky-950"
        role="navigation" aria-label="Main Navigation">
        <div class="flex self-stretch my-auto text-blue-900 rounded-none w-[199px]">
            <div class="grow text-2xl">
                <span class="font-light">Sphere</span>
                Shopping
            </div>
            <div class="self-start text-xs font-light">TM</div>
        </div>
        <a href="/automotive"
            class="self-stretch my-auto text-xl leading-none w-[113px] hover:text-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500"
            tabindex="0">
            Automotive
        </a>
        <a href="/fashion"
            class="gap-2.5 self-stretch px-6 py-3.5 my-auto text-xl leading-none text-white whitespace-nowrap bg-sky-950 min-h-[40px] rounded-[40px] w-[120px] max-md:px-5 hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-sky-500"
            tabindex="0">
            Fashion
        </a>
        <a href="/electronics"
            class="self-stretch my-auto text-xl leading-none w-[107px] hover:text-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500"
            tabindex="0">
            Electronics
        </a>
        <a href="/machinery"
            class="self-stretch my-auto text-xl leading-none w-[107px] hover:text-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500"
            tabindex="0">
            Machinery
        </a>
        <a href="/energy"
            class="self-stretch my-auto text-xl leading-none w-[78px] hover:text-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500"
            tabindex="0">
            Energy
        </a>
        <a href="/healthcare"
            class="self-stretch my-auto text-xl leading-none w-[107px] hover:text-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500"
            tabindex="0">
            Healthcare
        </a>
    </nav>

    <nav class="flex justify-center max-w-6xl mt-[45px] px-4 mx-auto flex-wrap gap-10 items-center font-light text-sky-950"
        role="navigation" aria-label="Main navigation">
        <div class="flex flex-col self-stretch my-auto text-sm leading-none rounded-none w-[150px]" role="button"
            tabindex="0" aria-haspopup="true" aria-expanded="false">
            <div
                class="flex gap-5 justify-between px-3.5 py-3.5 bg-white rounded-md border border-solid border-sky-950">
                <div>All categories</div>
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/b0245601a28a30f146885b77ef57a836c81c148c76b78d621b95b4d31e94fd41?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                    class="object-contain shrink-0 self-start mt-1.5 aspect-[1.57] w-[11px]" alt="" />
            </div>
        </div>
        <div
            class="flex gap-8 items-center self-stretch my-auto text-base leading-none whitespace-nowrap min-w-[240px]">
            <a href="#women" class="self-stretch my-auto text-rose-600 w-[57px]">Women</a>
            <a href="#men" class="self-stretch my-auto w-[30px]">Men</a>
            <a href="#kids" class="self-stretch my-auto w-8">Kids</a>
            <a href="#accessories" class="self-stretch my-auto w-[83px]">Accessories</a>
            <a href="#jewelry" class="self-stretch my-auto w-14">Jewelry</a>
        </div>
    </nav>


    <section class="grid grid-cols-2 lg:grid-cols-4 max-w-6xl mt-[45px] mx-auto gap-5 items-center">
        <div class="flex flex-col self-stretch px-5 pt-5 pb-2 my-auto bg-white rounded-xl shadow-sm  " role="article"
            aria-label="Product card for laced pattern dress">
            <div class="flex flex-col items-center w-full min-h-[354px]">
                <div class="flex gap-10 justify-between items-start max-w-full w-[215px]">
                    <div class="flex items-center justify-center px-1.5 w-10 h-10 text-xs font-medium leading-none text-white whitespace-nowrap bg-rose-600 rounded-3xl min-h-[40px]"
                        role="status" aria-label="New product badge">
                        New!
                    </div>
                    <div class="flex flex-col items-end w-[11px]">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/f290b55d1b794f7c149daeb01e45ba9f498660eaa23920b8813419ab01056322?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="" class="object-contain aspect-[1.1] w-[11px]" />
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/71a64cafd7acc6bf656c2a25411885545eb5d97d75b00bfbd82e840a7599ddac?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="" class="object-contain mt-2 w-2.5 aspect-[0.91]" />
                    </div>
                </div>
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/efdc0d208546e941f6faa82d1f7b80c73706ad2589fa1a459fa0c9c7e188db4e?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                    alt="Laced pattern dress product image"
                    class="object-contain mt-1 max-w-full aspect-[0.58] w-[148px]" />
                <div class="flex flex-col mt-1 max-w-full w-[114px]">
                    <div class="flex gap-1 items-center self-center" role="group"
                        aria-label="Product rating 4 out of 5 stars">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/84d33028f2a0322676563b366f7953114fd8895bce1295a430b7a927f5e67faf?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/84d33028f2a0322676563b366f7953114fd8895bce1295a430b7a927f5e67faf?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/84d33028f2a0322676563b366f7953114fd8895bce1295a430b7a927f5e67faf?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/84d33028f2a0322676563b366f7953114fd8895bce1295a430b7a927f5e67faf?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/4ea6791729fb3b8e7edef5374785169d2270ae8cdd14c639be8a5016b127c0a5?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                    </div>
                    <div class="text-xs text-zinc-500">Laced pattern dress</div>
                    <div class="text-xs font-medium text-center text-slate-900">$69.99</div>
                </div>
            </div>
        </div>

        <!--  -->
        <div class="flex flex-col self-stretch my-auto " role="article"
            aria-label="Product card for laced pattern dress">
            <div class="flex flex-col px-5 py-5 bg-white rounded-xl shadow-sm">
                <div class="flex flex-col items-end self-end w-[11px]">
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/f290b55d1b794f7c149daeb01e45ba9f498660eaa23920b8813419ab01056322?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                        alt="" class="object-contain w-full aspect-[1.1]" />
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/71a64cafd7acc6bf656c2a25411885545eb5d97d75b00bfbd82e840a7599ddac?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                        alt="" class="object-contain mt-2 w-full aspect-[0.91]" />
                </div>
                <div class="flex flex-col self-start mt-3">
                    <div class="flex flex-col justify-center px-6 py-16 w-full rounded-3xl max-md:px-5">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/2ef1b4f2a8353678b23589845d0b5d016a02f31f23c3778a6a171018eeac87f4?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="Laced pattern dress product image" class="object-contain aspect-[1.57] w-[143px]" />
                    </div>
                    <div class="flex flex-col self-center mt-9 max-w-full w-[114px]">
                        <div class="flex gap-1 items-center self-center" role="group"
                            aria-label="Product rating 4 out of 5 stars">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/5beb267bf35e6b39fd03481e410306fe661bbe3f0ec30a331537963f995b1e72?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/5beb267bf35e6b39fd03481e410306fe661bbe3f0ec30a331537963f995b1e72?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/5beb267bf35e6b39fd03481e410306fe661bbe3f0ec30a331537963f995b1e72?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/5beb267bf35e6b39fd03481e410306fe661bbe3f0ec30a331537963f995b1e72?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/ede04ef0f3ee2ae0feaa9fbadcb4f13509409a92a46c47b7cfc5e12bfe6a0ded?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                        </div>
                        <div class="text-xs text-zinc-500">Laced pattern dress</div>
                        <div class="text-xs font-medium text-center text-slate-900">$69.99</div>
                    </div>
                </div>
            </div>
        </div>

        <!--  -->
        <div class="flex flex-col self-stretch my-auto " role="article"
            aria-label="Product card for laced pattern dress">
            <div class="flex flex-col px-5 py-5 bg-white rounded-xl shadow-sm">
                <div class="flex flex-col items-end self-end w-[11px]">
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/f290b55d1b794f7c149daeb01e45ba9f498660eaa23920b8813419ab01056322?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                        alt="" class="object-contain w-full aspect-[1.1]" />
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/71a64cafd7acc6bf656c2a25411885545eb5d97d75b00bfbd82e840a7599ddac?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                        alt="" class="object-contain mt-2 w-full aspect-[0.91]" />
                </div>
                <div class="flex flex-col self-start mt-3">
                    <div class="flex flex-col justify-center px-6 py-16 w-full rounded-3xl max-md:px-5">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/2ef1b4f2a8353678b23589845d0b5d016a02f31f23c3778a6a171018eeac87f4?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="Laced pattern dress product image" class="object-contain aspect-[1.57] w-[143px]" />
                    </div>
                    <div class="flex flex-col self-center mt-9 max-w-full w-[114px]">
                        <div class="flex gap-1 items-center self-center" role="group"
                            aria-label="Product rating 4 out of 5 stars">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/5beb267bf35e6b39fd03481e410306fe661bbe3f0ec30a331537963f995b1e72?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/5beb267bf35e6b39fd03481e410306fe661bbe3f0ec30a331537963f995b1e72?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/5beb267bf35e6b39fd03481e410306fe661bbe3f0ec30a331537963f995b1e72?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/5beb267bf35e6b39fd03481e410306fe661bbe3f0ec30a331537963f995b1e72?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/ede04ef0f3ee2ae0feaa9fbadcb4f13509409a92a46c47b7cfc5e12bfe6a0ded?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                        </div>
                        <div class="text-xs text-zinc-500">Laced pattern dress</div>
                        <div class="text-xs font-medium text-center text-slate-900">$69.99</div>
                    </div>
                </div>
            </div>
        </div>

        <!--  -->

        <div class="flex flex-col self-stretch my-auto " role="article"
            aria-label="Product card for laced pattern dress">
            <div class="flex flex-col px-5 py-5 bg-white rounded-xl shadow-sm">
                <div class="flex flex-col items-end self-end w-[11px]">
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/f290b55d1b794f7c149daeb01e45ba9f498660eaa23920b8813419ab01056322?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                        alt="" class="object-contain w-full aspect-[1.1]" />
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/71a64cafd7acc6bf656c2a25411885545eb5d97d75b00bfbd82e840a7599ddac?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                        alt="" class="object-contain mt-2 w-full aspect-[0.91]" />
                </div>
                <div class="flex flex-col self-start mt-3">
                    <div class="flex flex-col justify-center px-6 py-16 w-full rounded-3xl max-md:px-5">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/2ef1b4f2a8353678b23589845d0b5d016a02f31f23c3778a6a171018eeac87f4?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                            alt="Laced pattern dress product image" class="object-contain aspect-[1.57] w-[143px]" />
                    </div>
                    <div class="flex flex-col self-center mt-9 max-w-full w-[114px]">
                        <div class="flex gap-1 items-center self-center" role="group"
                            aria-label="Product rating 4 out of 5 stars">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/5beb267bf35e6b39fd03481e410306fe661bbe3f0ec30a331537963f995b1e72?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/5beb267bf35e6b39fd03481e410306fe661bbe3f0ec30a331537963f995b1e72?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/5beb267bf35e6b39fd03481e410306fe661bbe3f0ec30a331537963f995b1e72?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/5beb267bf35e6b39fd03481e410306fe661bbe3f0ec30a331537963f995b1e72?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/ede04ef0f3ee2ae0feaa9fbadcb4f13509409a92a46c47b7cfc5e12bfe6a0ded?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                alt="" class="object-contain shrink-0 self-stretch my-auto w-2 aspect-square" />
                        </div>
                        <div class="text-xs text-zinc-500">Laced pattern dress</div>
                        <div class="text-xs font-medium text-center text-slate-900">$69.99</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- product banner -->
    <section class='max-w-6xl mt-[138px] mx-auto'>
        <div class="flex flex-col">
            <div class="flex relative flex-col justify-center items-start px-20 py-44 w-full min-h-[496px] max-md:px-5 max-md:py-24 max-md:max-w-full"
                role="region" aria-label="Trending Products Section">
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/1f04251bc347e0e0e9f13935bec0b74014f4b40afd7290472dd65bf329c5c8db?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                    class="object-cover absolute inset-0 size-full" alt="Trending products background" />
                <div class="flex relative flex-col -mb-9 max-w-full w-[378px] max-md:mb-2.5">
                    <div class="flex z-0 flex-col w-full">
                        <div class="flex flex-col max-w-full w-[156px]">
                            <h2 class="text-2xl font-light text-white">Now Trending</h2>
                            <a href="#shop-trending"
                                class="flex gap-1.5 items-center self-start text-xl text-red-600 hover:underline focus:outline-none focus:ring-2 focus:ring-red-600">
                                <span class="self-stretch my-auto">Shop Now</span>
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/caa1de0333582f96803bbb084d1634afd88dae19ea16a2bdcd5022d53adf52f3?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                                    class="object-contain shrink-0 self-stretch my-auto w-[38px]"
                                    alt="Shop now arrow indicator" />
                            </a>
                        </div>
                        <h3 class="mt-16 text-3xl text-white max-md:mt-10">
                            Xioami Bass Speaker V2
                        </h3>
                    </div>
                    <!-- <div class="flex absolute z-0 flex-col self-start bottom-[-126px] right-[-105px]" role="navigation"
                        aria-label="Slideshow navigation">
                        <div class="flex gap-6 items-center">
                            <button class="flex shrink-0 self-stretch my-auto w-3.5 h-3.5 bg-white rounded-full"
                                aria-label="Slide 1" aria-current="true"></button>
                            <button class="flex shrink-0 self-stretch my-auto w-3.5 h-3.5 rounded-full bg-stone-400"
                                aria-label="Slide 2"></button>
                            <button class="flex shrink-0 self-stretch my-auto w-3.5 h-3.5 rounded-full bg-stone-400"
                                aria-label="Slide 3"></button>
                            <button class="flex shrink-0 self-stretch my-auto w-3.5 h-3.5 rounded-full bg-stone-400"
                                aria-label="Slide 4"></button>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <div class="max-w-6xl mt-[138px] mx-auto grid gap-3 grid-cols-2 lg:grid-cols-3 flex-wrap lg:justify-between items-center text-2xl leading-6 text-blue-900 whitespace-nowrap"
        role="region" aria-label="Features highlights">
        <div class="flex flex-col self-stretch my-auto lg:w-[197px]">
            <div class="flex gap-4 justify-between items-center">
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/747b49b674db4171542ebed6be1aca2d53781f89fea371122657a45d4c94a01c?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                    class="object-contain shrink-0 self-stretch my-auto aspect-square lg:w-[63px]"
                    alt="Custom boxing service icon" />
                <div class="self-stretch my-auto">
                    Customed
                    <br />
                    Boxing
                </div>
            </div>
        </div>
        <div class="flex gap-4 items-center self-stretch my-auto">
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/be4138cb404f89a0bba9242663d4f5b9a504564b07fb23b7e422057944a060f5?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                class="object-contain shrink-0 self-stretch my-auto aspect-square w-[63px]"
                alt="Global delivery service icon" />
            <div class="self-stretch my-auto">
                Global
                <br />
                Delivery
            </div>
        </div>
        <div class="flex gap-4 items-center self-stretch my-auto">
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/0b63a1daca09840381919aed92fa6aaec314129d1343134f2d1a0777ca1ac9c2?placeholderIfAbsent=true&apiKey=f9b31430640f4f25af6eace5cd8bec03"
                class="object-contain shrink-0 self-stretch my-auto aspect-square w-[63px]"
                alt="Returns and exchange policy icon" />
            <div class="self-stretch my-auto">
                Returns
                <br />
                Exchange
            </div>
        </div>
    </div>

</x-layout>