<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\User;
use Livewire\Component;
use App\Models\Industry;
use Illuminate\Http\Request;
use App\Models\ProductIndustry;
use Illuminate\Support\Str;
use Redirect;



class RegisterUser extends Component
{

    public $name;
    public $email;
    public $password;
    public $company_name;
    public $fax_number;
    public $business_number;
    public $industry_id;

    public $prod_industries=[];
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
            'company_name' => 'required',
            'fax_number' => 'required',
            'business_number' => 'required',
            'industry_id' => 'required',
            // 'product_industry' => 'required',
    ]);

    collect($request->all())->each(function ($value, $key) {

        if(str::contains($key,'product_industry')){
            $this->prod_industries[]=$value;
        }
      
    });

    $registedUser =    User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);

       

if($registedUser->wasRecentlyCreated){
    
   Customer::create([
        'company_name' => $validated['company_name'],
        'fax_number' => $validated['fax_number'],
        'business_number' => $validated['business_number'],
        'industry_id' => $validated['industry_id'],
        'product_industry' => $this->prod_industries,
        'user_id' => $registedUser->id,
    ]);
    
Redirect::to('/information-access')->send();

}



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
