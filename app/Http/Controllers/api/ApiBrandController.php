<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiBrandController extends Controller
{
    public function index(){
        $brand = Brand::all();
        return response()->json($brand);
    }

    public function show($id){
        $brand = Brand::find($id);
        if(!$brand) {
            return response()->json(['error' => 'Marque non trouvée'], 404);
        }

        return response()->json($brand);
    }
}
