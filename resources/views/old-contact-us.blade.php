@php
  $data = [
        [
          'buttonA' => 'Sales Enquiry',
          'buttonB' => 'Get a quote',
        'description' => 'We are here to help you. If you have any questions or need assistance, please contact us.',
        'image' => 'assets/thumb-nails/Contact-08 1.png'
      ],
[
  'buttonA' => 'Partner now',
          'buttonB' => 'Register',
        'description' => 'Join us now to aid your supply chain and distribution solutions',
        'image' => 'assets/thumb-nails/Contact-05 1.png'
],
[
  'buttonA' => 'Schedule a call',
          'buttonB' => 'Register',
        'description' => 'Customized call to expert professionals to assist with your business needs',
        'image' => 'assets/thumb-nails/Contact-06 1.png'
],

[
          'buttonA' => 'Support',
          'buttonB' => 'Register',
        'description' => 'Marketing support services for our distributors and partners',
        'image' => 'assets/thumb-nails/Contact-07 1.png'
],
    ];

  $links = [
    ['title' => 'Proposal', 'icon' => 'heroicon-o-document-text'],
    ['title' => 'Catalog', 'icon' => 'heroicon-o-document-text'],
    ['title' => 'Newsletter', 'icon' => 'heroicon-o-document-text'],
    ['title' => 'Media', 'icon' => 'heroicon-o-document-text'],
    ['title' => 'Ask us?', 'icon' => 'heroicon-o-document-text'],
    ['title' => 'Feedback', 'icon' => 'heroicon-o-document-text'],

   
  ];
@endphp

<x-layout >
  <div >
    
 <div >
   <div class="max-w-6xl mx-auto px-8">
    <section class=" space-y-20 mt-28">

        <div class="md:flex md:justify-between md:items-center text-[#004581] space-y-4 space-x-10">
           <h3>Contact us </h3>
           <p class="md:flex-grow text-xs md:text-sm max-w-xl md:px-10">Need updates, check cargo status, book container, become a partner, learn more
             about our solutions from our team of dedicated experts ready to assist you.</p>
        </div>

        <ul class="grid grid-cols-2 lg:grid-cols-4 gap-4"> 
            @foreach($data as $contact)
            <li class=""><x-contact.card  description="{{$contact['description']}}" image="{{$contact['image']}}" buttonA="{{$contact['buttonA']}}" buttonB="{{$contact['buttonB']}}"/></li>
            @endforeach
        </ul>
    </section>
 </div>
  </div>

  <div class="py-20 h-96 flex items-center bg-gradient-to-b from-white via-[#DDE8F0] to-white">
   
     <section class="max-w-6xl mx-auto px-8">

     <ul  class="flex items-center justify-center space-x-12">
      @foreach($links as $link)
      <li class="flex flex-col items-center">
        <div class="size-10 rounded-full border-[#003C97] border-4 flex items-center justify-center">
         
          <div class="size-5">{{ svg($link['icon']) }}</div>
        </div> 
        <p>{{$link['title']}}</p>
      </li>
      @endforeach
     </ul>
    
     </section>
 
   </div>

{{-- Form --}}
   <section class="max-w-6xl mx-auto px-8">

  
    <div class="border-b border-gray-900/10 text- pb-12">
      <h2 class="text-base/7 font-semibold text-[#003C97]">Request for proposal</h2>
      <h3 class="mt-1 text-sm text-[#003173]">Please fill all the required fields and select your desired industry and or products</h3>
       <p class="text-xs text-[#003173]">Submit your information and order details to receive customized support from our expert team</p>
     
      <form action="">
      <div class="text-[#003173] mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-3">
        <div class="">
          <label for="first-name" class="block text-sm/6 font-medium ">First name <span class="text-[#FF0004]">*</span></label>
          <div class="mt-2">
            <input required type="text" name="first_name" id="first_name" autocomplete="given-name" class="block w-full rounded-full bg-white px-3 py-1.5 text-base  outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="">
          <label for="last_name" class="block text-sm/6 font-medium ">Last name<span class="text-[#FF0004]">*</span></label>
          <div class="mt-2">
            <input type="text" name="last_name" id="las_name" autocomplete="family-name" class="block w-full rounded-full bg-white px-3 py-1.5 text-base  outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="">
          <label for="job_title" class="block text-sm/6 font-medium ">Job title<span class="text-[#FF0004]">*</span></label>
          <div class="mt-2">
            <input id="job_title" name="job_title" type="text" autocomplete="email" class="block w-full rounded-full bg-white px-3 py-1.5 text-base  outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="">
          <label for="component_name" class="block text-sm/6 font-medium ">Company name<span class="text-[#FF0004]">*</span></label>
          <div class="mt-2">
            <input id="component_name" name="component_name" type="text"  class="block w-full rounded-full bg-white px-3 py-1.5 text-base  outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="">
          <label for="email" class="block text-sm/6 font-medium ">Corporate email address <span class="text-[#FF0004]">*</span></label>
          <div class="mt-2">
            <input id="email" name="component_name" type="email"  class="block w-full rounded-full bg-white px-3 py-1.5 text-base  outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="">
          <label for="phone" class="block text-sm/6 font-medium ">Phone Number<span class="text-[#FF0004]">*</span></label>
          <div class="mt-2">
            <input id="phone" name="phone" type="tel"  class="block w-full rounded-full bg-white px-3 py-1.5 text-base  outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="">
          <label for="country" class="block text-sm/6 font-medium ">Country/region<span class="text-[#FF0004]">*</span></label>
          <div class="mt-2">
            <input id="country" name="country" type="text"  class="block w-full rounded-full bg-white px-3 py-1.5 text-base  outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="">
          <label for="revenue" class="block text-sm/6 font-medium ">Revenue (optional)</label>
          <div class="mt-2">
            <input id="revenue" name="revenue" type="text"  class="block w-full rounded-full bg-white px-3 py-1.5 text-base  outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="">
          <label for="industry" class="block text-sm/6 font-medium ">Industry <span class="text-[#FF0004]">*</span></label>
          <div class="mt-2">
            <input id="industry" name="industry" type="text"  class="block w-full rounded-full bg-white px-3 py-1.5 text-base  outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>



        <div class="">
          <label for="country" class="block text-sm/6 font-medium ">Country</label>
          <div class="mt-2 grid grid-cols-1">
            <select id="country" name="country" autocomplete="country-name" class="col-start-1 row-start-1 w-full appearance-none rounded-full bg-white py-1.5 pl-3 pr-8 text-base  outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
              <option>United States</option>
              <option>Canada</option>
              <option>Mexico</option>
            </select>
            <ChevronDownIcon class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" aria-hidden="true" />
          </div>
        </div>

        <div class="">
          <label for="street-address" class="block text-sm/6 font-medium ">Street address</label>
          <div class="mt-2">
            <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-full bg-white px-3 py-1.5 text-base  outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="">
          <label for="city" class="block text-sm/6 font-medium ">City</label>
          <div class="mt-2">
            <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-full bg-white px-3 py-1.5 text-base  outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="">
          <label for="region" class="block text-sm/6 font-medium ">State / Province</label>
          <div class="mt-2">
            <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-full bg-white px-3 py-1.5 text-base  outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="">
          <label for="postal-code" class="block text-sm/6 font-medium ">ZIP / Postal code</label>
          <div class="mt-2">
            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-full bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>
      </div>
     </form>
    </div>
 

   
    </section>

  </div>
       
</x-layout>

