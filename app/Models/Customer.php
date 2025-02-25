<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{

    protected $fillable = [
        'company_name',
        'profile_image',
        'birthday',
        'gender',
        'country',
        'fax_number',
        'product_industry',
        'business_number',
        'industry_id',

    ];


    protected $casts = [
        'id' => 'integer',
        'industry_id' => 'integer',
        'product_industry' => 'array',
    ];


    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
