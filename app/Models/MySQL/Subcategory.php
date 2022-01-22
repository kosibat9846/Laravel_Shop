<?php

namespace App\Models\MySQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Subcategory extends Model
{
    use HasFactory;


    protected $fillable = ['name'];



    public function products(): BelongsTo
    {

        return $this->belongsTo('App\Models\MySQL\Product');

    }

    public function productDetails(): BelongsTo
    {

        return $this->belongsTo('App\Models\MySQL\Productdetails');

    }

}
