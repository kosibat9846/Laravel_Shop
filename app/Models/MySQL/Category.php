<?php

namespace App\Models\MySQL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{HasMany};

class Category extends Model
{
    use HasFactory;

protected $fillable = ['name'];

    public function products(): HasMany
    {
        return $this->hasMany('App\Models\MySQL\Product');
    }




}
