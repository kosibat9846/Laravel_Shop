<?php

namespace App\Models\MySQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Productdetails extends Model
{
    use HasFactory;

    public function subcategories(): HasManyThrough
    {

        return $this->hasManyThrough('App\Models\MySQL\Subcategory');

    }

    public function products(): HasMany
    {

        return $this->hasMany('App\Models\MySQL\Product');

    }


}
