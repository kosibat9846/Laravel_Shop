<?php

namespace App\Models\MDB;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

/**
 * @method static where(string $string, string $string1, string $string2)
 */
class Categories extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'categories';

    protected $fillable = [
        'name','subcategory'
    ];
}
