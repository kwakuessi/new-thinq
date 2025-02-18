<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Industry;
use Illuminate\Http\Request;
use App\Models\ProductIndustry;


class RegisterUser extends Component
{

    public $name;
    public $email;
    public $password;
    public $company_name;
    public $fax_number;
    public $business_number;
    public $industry_id;
    // public $name;
    // public $name;
    // public $name;
    // public $name;
    // public $name;

    public function create(Request $request)
    {

    $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            // 'company_name' => 'required',
            // 'fax_number' => 'required',
            // 'business_number' => 'required',
            // 'industry_id' => 'required',
        ]);


    $registedUser =    User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            // 'company_name' => $this->company_name,
            // 'fax_number' => $this->fax_number,
            // 'business_number' => $this->business_number,
            // 'industry_id' => $this->industry_id,
        ]);


if($registedUser->wasRecentlyCreated){
    dd('User created successfully');
}

        // User::created(function (User $user) {
        //     dd($user);
        // });


    }

    public function render()
    {

        $industries = Industry::all();

        $product_industries = ProductIndustry::all();
      
        return view('livewire.register-user',[
            "industries"=> $industries,
            "product_industries"=> $product_industries
           ]);
    }
}
