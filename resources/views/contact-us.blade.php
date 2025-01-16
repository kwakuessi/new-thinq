@php
    $data = [
        [
        'description' => 'We are here to help you. If you have any questions or need assistance, please contact us.',
        'image' => 'assets/thumb-nails/Contact-08 1.png'
      ],
[
        'description' => 'We are here to help you. If you have any questions or need assistance, please contact us.',
        'image' => 'assets/thumb-nails/Contact-08 1.png'
],
[
        'description' => 'We are here to help you. If you have any questions or need assistance, please contact us.',
        'image' => 'assets/thumb-nails/Contact-08 1.png'
],

[
        'description' => 'We are here to help you. If you have any questions or need assistance, please contact us.',
        'image' => 'assets/thumb-nails/Contact-08 1.png'
],
    ];
@endphp

<x-layout>
    
  <div class="max-w-5xl mx-auto">
    <section class="my-20">

        <div class="md:flex md:justify-between md:items-center text-[#004581] space-y-4 space-x-10">
           <h3>Contact us </h3>
           <p class="md:flex-grow text-xs max-w-xl md:px-10">Need updates, check cargo status, book container, become a partner, learn more
             about our solutions from our team of dedicated experts ready to assist you.</p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4"> 
            @foreach($data as $contact)
            <x-contact.card description="{{$contact['description']}}" image="{{$contact['image']}}"/>
            @endforeach
        </div>
    </section>
  </div>
       
</x-layout>

