<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

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

    public function create()
    {

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            // 'company_name' => $this->company_name,
            // 'fax_number' => $this->fax_number,
            // 'business_number' => $this->business_number,
            // 'industry_id' => $this->industry_id,
        ]);

        

        // User::created(function (User $user) {
        //     dd($user);
        // });


    }

    public function render()
    {

        // $industries = Industry::all();

        // $product_industries = ProductIndustry::all();
      

        return view('livewire.register-user',[
            // "industries"=> $industries,
            // "product_industries"=> $product_industries
           ]);
    }
}
