<?php

namespace App\Models\MySQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany, HasManyThrough};

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category','dimension','category_id','subcategory_id'];

    public function categories(): BelongsTo
    {
        return $this->belongsTo('App\Models\MySQL\Category');
    }

    public function subcategories(): HasManyThrough
    {
        return $this->hasManyThrough('App\Models\MySQL\Subcategory');
    }

    public function productDetails(): HasMany
    {
        return $this->hasMany('App\Models\MySQL\Productdetails');
    }
}
