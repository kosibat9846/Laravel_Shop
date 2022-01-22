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

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
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


    public function search($name): JsonResponse
    {
        {
            $search = Product::where('name', 'like', '%' . $name . '%')->get();
            return response()->json($search);


        }
    }








    /////////////////////////API



    public function categories(): JsonResponse
    {





        $categories = Category::all('name');

        return response()->json($categories);


    }

        public function productdetail($product_id): JsonResponse
        {


            $productdetails = Productdetails::where('product_id','like','%' . $product_id . '%')->get();

            return response()->json($productdetails);
        }






        public function subcategories($category_id): JsonResponse
        {
            $subcategories = Subcategory::where('category_id','like','%' . $category_id . '%')->get();



            return response()->json($subcategories);


        }


         public function subcategoriesproducts($subcategory_id): JsonResponse
    {

        $subcategoriesproducts = Product::where('subcategory_id','like','%' . $subcategory_id . '%')->get();

        return  response()->json($subcategoriesproducts);

    }












}
