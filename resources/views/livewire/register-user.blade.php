@vite('resources/css/app.css')



<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 gap-5">
         <!-- Form to input the index number -->
         <form method="POST" action="{{ route('register') }}">
           @csrf
                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <x-filament::input type="text" id="name" name="name" wire:model="name"
                        Placeholder='name' required />
                </x-filament::input.wrapper>

                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <x-filament::input type="email" id="email" name="email" wire:model="email"
                        Placeholder='email' required />
                </x-filament::input.wrapper>

                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <x-filament::input type="password" id="password" name="password" wire:model="password"
                        Placeholder='password' required />
                </x-filament::input.wrapper>


                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <x-filament::input type="text" id="company_name" name="company_name" wire:model="company_name"
                        Placeholder='company_name' required />
                </x-filament::input.wrapper>

                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <x-filament::input type="text" id="fax_number" name="fax_number" wire:model="fax_number"
                        Placeholder='fax_number' required />
                </x-filament::input.wrapper>

                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <x-filament::input type="text" id="business_number" name="business_number" wire:model="business_number"
                        Placeholder='business_number' required />
                </x-filament::input.wrapper>

                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <!-- <x-filament::input type="text" id="industry_id" wire:model="industry_id"
                        Placeholder='industry_id' required /> -->
                        <x-filament::input.select id="industry_id" name="industry_id" wire:model="industry_id">
                      @foreach ($industries as $industry)
                            <option value="{{ $industry->id }}">{{ $industry->name }}</option>

                      @endforeach

                </x-filament::input.select>
                </x-filament::input.wrapper>

              <p>product industry</p>

               <div>
               @foreach ($product_industries as $product_industry)
                            
                            <label>
                              <x-filament::input.checkbox name='{{$product_industry->name}}'  value="{{ $product_industry->id }}" />
                                <span>{{$product_industry->name}}</span>
                            </label>
           
                           @endforeach
               </div>

                

                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <x-filament::input type="file" id="profile_image" wire:model="profile_image"
                        Placeholder='profile_image'  />
                </x-filament::input.wrapper>

                <x-filament::button type="submit" wire:click="store" class="!text-black">
                    Submit
                </x-filament::button>
            </form>
    </div>
</div>

