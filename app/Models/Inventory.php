<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'unit',
        'slug',
        'featured_image',
        'weight',
        'quantity',
        'price',
        'type',
        'weight_unit',
        'height_value',
        'height_unit',
        'width_value',
        'width_unit',
        'depth_value',
        'depth_unit',
        'volume_value',
        'volume_unit',
        'sub_category_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sub_category_id' => 'integer',
    ];

    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }
}
