<?php

namespace App\Http\Controllers;

use App\Models\MDB\Categories;
use App\Models\MDB\Products;
use Illuminate\Http\JsonResponse;


class ProductMDBController extends Controller
{

    public function index(): JsonResponse
    {
            $products = Products::all();
            return response()->json($products);

    }


    public function show( $_id): JsonResponse
    {
        $show = Products::where('_id', 'like', '%' . $_id . '%')->get();

        return response()->json($show);
    }

    public function search($name): JsonResponse

    {
            $search = Products::where('name', 'like', '%' . $name . '%')->get();
            return response()->json($search);

    }

    public function productdetails(Products $_id): JsonResponse
    {


        $productdetails = Products::where('_id','like','%' . $_id . '%')->get();

        return response()->json($productdetails);
    }

    public function categories(): JsonResponse
    {

    $categories = Categories::all();



    return response()->json($categories);

    }


    public function subcategories($category): JsonResponse
    {
        $subcategories = Products::where('category','like','%' . $category . '%')->pluck('subcategory')->get();



     return response()->json($subcategories);


    }




}
