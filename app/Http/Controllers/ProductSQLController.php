<?php

namespace App\Http\Controllers;

use App\Models\MDB\Products;
use App\Models\MySQL\Category;
use App\Models\MySQL\Product;
use App\Models\MySQL\Productdetails;
use App\Models\MySQL\Subcategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductSQLController extends Controller
{


    public function index(): JsonResponse

    {
        $product = Product::all();


        return response()->json($product);

    }


    public function show( $_id): JsonResponse
    {
        $show = Product::where('_id', 'like', '%' . $_id . '%')->get();

        return response()->json($show);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
        ]);


        Products::create($request->all());


        return redirect()->route('product.index')
            ->with('success', 'Product created successfully.');
    }

/////////

    public function search($name): JsonResponse
    {
        {
            $search = Product::where('name', 'like', '%' . $name . '%')->get();
            return response()->json($search);


        }
    }



    public function categories(): JsonResponse
    {


        $categories = Category::all('name');

        return response()->json($categories);


    }


    public function subcategories($category_id): JsonResponse
    {
            $subcategories = Subcategory::where('category_id','like','%' . $category_id . '%')->get();



            return response()->json($subcategories);


    }

}
