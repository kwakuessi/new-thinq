<section class="w-full h-[200px] antialiased relative bg-[#003C97] place-content-center">
    <div class="mx-auto max-w-7xl ">

        <nav class="relative z-50 h-24 m-auto select-none" x-data="{ showMenu: false }">
            <div class="container relative flex flex-wrap items-center justify-between h-24 mx-auto overflow-hidden  md:overflow-visible lg:justify-center sm:px-4 md:px-2 lg:px-0">
                <div class="flex items-center justify-start w-1/4 h-full pr-4">
                    <a href="#_" class="flex items-center py-4 space-x-2 font-extrabold text-white md:py-0">
                        <img src="{{ asset('assets/icons/Official Logo.svg') }}" class="w-[298px] h-[72px]" alt="ShareThinq Official Logo">
                    </a>
                </div>
                <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
                    <div class="flex-col w-full h-auto overflow-hidden bg-[#003C97] rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                        <a href="#_" class="inline-flex items-center w-auto h-16 px-6 text-xl font-black leading-none text-white md:hidden">
                            <img src="{{ asset('assets/icons/Official Logo.svg') }}" class="w-[298px] h-[72px]" alt="ShareThinq Official Logo">
                        </a>
                        <div class="flex flex-col items-start justify-center w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center">
                            <a href="#_" class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-[#FBBA61] md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Home</a>
                            <a href="#_" class="inline-block w-full py-2 mx-0 font-medium text-left text-white md:w-auto md:px-0 md:mx-2 hover:text-[#FBBA61] lg:mx-3 md:text-center">Services</a>
                            <a href="#_" class="inline-block w-full py-2 mx-0 font-medium text-left text-white md:w-auto md:px-0 md:mx-2 hover:text-[#FBBA61] lg:mx-3 md:text-center">Partnership</a>
                            <a href="#_" class="inline-block w-full py-2 mx-0 font-medium text-left text-white md:w-auto md:px-0 md:mx-2 hover:text-[#FBBA61] lg:mx-3 md:text-center">Company</a>
                            <a href="#_" class="inline-block w-full py-2 mx-0 font-medium text-left text-white md:w-auto md:px-0 md:mx-2 hover:text-[#FBBA61] lg:mx-3 md:text-center">Contact</a>
                        </div>
                        <div class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                            <a href="#_" class="absolute top-0 left-0 hidden py-2 mt-6 ml-10 mr-2 text-white lg:inline-block md:mt-0 md:ml-2 lg:mx-3 md:relative">
                                <svg class="inline w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div @click="showMenu = !showMenu" class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 cursor-pointer md:hidden hover:text-white">
                    <svg class="w-6 h-6 text-white" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    <svg class="w-6 h-6 text-white" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </div>
            </div>
        </nav>


    </div>
</section>
