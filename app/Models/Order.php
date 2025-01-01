<?php

namespace App\Models;

use App\Enum\OrderStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_code',
        'customer_id',
        'shipping_method_id',
        'address_id',
        'status',
        'total_price',
        'order_type',
    ];

    // protected $table = 'orders';


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
        'shipping_method_id' => 'integer',
        'address_id' => 'integer',
        // 'total_price' => 'decimal',
        'status' => OrderStatus::class,
    ];



    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function shippingMethod(): BelongsTo
    {
        return $this->belongsTo(ShippingMethod::class);
    }

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'address_id');
    }

    /** @return HasMany<OrderLine> */
    public function orderLines(): HasMany
    {
        return $this->hasMany(OrderLine::class);
    }


}
