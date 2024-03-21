<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiProductsController extends Controller
{
    public function index(){
        $products = Product::all();
        return response()->json($products);
    }

    public function show($id){
        $product = Product::find($id);
        if(!$product) {
            return response()->json(['error' => 'Produit non trouvee'], 404);
        }

        return response()->json($product);
    }

    public function getProductByCategory($id){
         $category = Category::find($id);

         $products = $category->products()->orderby('id', 'asc')->get();

         return response()->json($products);
    }

    public function getProductByBrand($id){
        $brand = Brand::find($id);

        $products = $brand->products()->orderby('id', 'asc')->get();

        return response()->json($products);
   }
}
