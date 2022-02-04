<?php

namespace App\Models\MDB;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

/**
 * @method static where(string $string, string $string1, string $string2)
 */
class Products extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'products';

    protected $guarded = [];



//        $fillable = [
//       '_id', 'name', 'description','quantity','category','subcategory'
//    ];
    public static function find($_id)
    {
    }


}
