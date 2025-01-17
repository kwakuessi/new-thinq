<x-layout>
     <!-- Banner -->
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


<!--  Service   -->
<section class="w-full">
    <div class="mx-auto max-w-8xl  space-y-10">


    <div class="service grid grid-cols-3 gap-5">
        <div class="col-span-2">
            <!-- Thumb Services  -->
            <x-thumb.thumb-service></x-thumb.thumb-service>
        </div>

        <div class="Services">
            <!-- Thumb Services  -->
            <x-titles.icont-title>
                <x-slot:title>Key services</x-slot:title>
            </x-titles.icont-title>

            <div class="w-auto">
                <div class="w-auto Services-title">
                <p class="text-[#003c97] text-[40px] font-normal font-['Lexend'] leading-[52px]">
                    Let’s transform, <span class="text-[#898995] text-[40px] font-normal font-['Lexend'] leading-[52px]">the standards of your business</span>
                </p>
                </div>

                <div class="w-auto Services-content text-[#1d4289]">
                    Join our established network of partners and
                    <br/>lets transform your business with our unique innovative solutions and expertise,
                    delivering high quality services to redefine your supply chain.
                </div>

                <div class="w-auto">
                    <div class=" text-[#1d4289] text-2xl font-medium font-['Lexend']">Discover opportunities</div>
                </div>
            </div>

        </div>
    </div>

    </div>
</section>

<section class="w-full">
    <div class="mx-auto max-w-8xl  space-y-10">

    <div class="service thumb">
        <div class="service head grid grid-cols-3 gap-4">
            <p class="service-left text-[#003c97] text-[40px] font-normal font-['Lexend'] leading-[52px]">
                Let’s transform, <span class="text-[#898995] text-[40px] font-normal font-['Lexend'] leading-[52px]">the standards of your business</span>
            </p>

            <p class="col-span-2 service-right text-[#1d4289] text-4xl font-normal font-['Lexend']">
               We ensure that every procurement has strict quality checks
                and assurances. Delivery of end-to-end, cost-efficient,
                and sustainable supply chain solutions with tailored
                strategies to drive business growth.
            </p>

        </div>
    </div>

 <!-- Single thumbnail -->
    <div class="service-thumb grid grid-cols-3 gap-5 space-y-5">
        <x-thumb.thumb-single>
            <x-slot:title>Quality Assurance</x-slot:title>
            <x-slot:content>We ensure that every procurement has strict quality checks and assurances with rigorous testing at every production stage.</x-slot:content>
            <x-slot:icon>
                <img class="w-[50px] h-[50px] left-[17px] top-[22px] absolute" src="{{ asset('assets/icons/diamond-i.png') }}" alt="Quality Assurance/>
            </x-slot:icon>
        </x-thumb.thumb-single>

        <x-thumb.thumb-single>
            <x-slot:title>Recognized Brands</x-slot:title>
            <x-slot:content>Globally recognized brands that meet international and regional standards, complying with industry standards, and certifications to validate quality.</x-slot:content>
            <x-slot:icon>
                <img  class="w-[50px] h-[50px] left-[17px] top-[22px] absolute"

                 src="{{ asset('assets/icons/Recognized.png') }}" alt='Transparent'/>
            </x-slot:icon>
        </x-thumb.thumb-single>

        <x-thumb.thumb-single>
            <x-slot:title>Transparent Manufacturing</x-slot:title>
            <x-slot:content>Open communication about manufacturing and sourcing methods, ensuring ethical and sustainable supply chains.</x-slot:content>
            <x-slot:icon>
                <img class="w-[50px] h-[50px] left-[17px] top-[22px] absolute" src="{{ asset('assets/icons/Transparent.png') }}" alt="Transparent"/>
            </x-slot:icon>
        </x-thumb.thumb-single>

        <x-thumb.thumb-single>
            <x-slot:title>Customization & Support</x-slot:title>
            <x-slot:content>Offering customization with unique configurations or features tailored to meet specific needs or preferences of customers.</x-slot:content>
            <x-slot:icon>
                <img class="w-[50px] h-[50px] left-[17px] top-[22px] absolute" src="{{ asset('assets/icons/Customization.png') }}" alt="Customization" />
            </x-slot:icon>
        </x-thumb.thumb-single>

        <x-thumb.thumb-single>
            <x-slot:title>Innovation & Technology</x-slot:title>
            <x-slot:content>Ensuring that manufacturers or producers utilizes cutting edge technology in their production processes to meet evolving customer demands.</x-slot:content>
            <x-slot:icon>
                <img class="w-[50px] h-[50px] left-[17px] top-[22px] absolute" src="{{ asset('assets/icons/Innovation.png') }}" alt='Innovation'/>
            </x-slot:icon>
        </x-thumb.thumb-single>

        <x-thumb.thumb-single>
            <x-slot:title>Cost-Effective Solutions</x-slot:title>
            <x-slot:content>Offering the best balance of quality and cost through the implementation of cost-efficient productions with value-added services.</x-slot:content>
            <x-slot:icon>
                <img class="w-[50px] h-[50px] left-[17px] top-[22px] absolute" src="{{ asset('assets/icons/Cost-Effective.png') }}" alt='Cost-Effective'/>
            </x-slot:icon>
        </x-thumb.thumb-single>

        <x-thumb.thumb-single>
            <x-slot:title>Wide Range Industries</x-slot:title>
            <x-slot:content>Source products from diverse range of industries, ensuring superior quality and affordability.</x-slot:content>
            <x-slot:icon>
                <img class="w-[50px] h-[50px] left-[17px] top-[22px] absolute" src="{{ asset('assets/icons/Wide.png') }}" alt="Wide Range"/>
            </x-slot:icon>
        </x-thumb.thumb-single>

        <x-thumb.thumb-single>
            <x-slot:title>Reliable Delivery</x-slot:title>
            <x-slot:content>Streamlined logistics to ensure on-time deliverywith flexible return and exchange policies.</x-slot:content>
            <x-slot:icon>
                <img class="w-[50px] h-[50px] left-[17px] top-[22px] absolute" src="{{ asset('assets/icons/diamond-i.png') }}" alt=''/>
            </x-slot:icon>
        </x-thumb.thumb-single>

        </div>


    </div>
</section>





</x-layout>
