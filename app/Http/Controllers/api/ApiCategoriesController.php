<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiCategoriesController extends Controller
{
    public function index(){
        $categories = Category::all();
        return response()->json($categories);
    }

    public function show($id){
        $categorie = Category::find($id);
        if(!$categorie) {
            return response()->json(['error' => 'Categorie non trouvee'], 404);
        }

        return response()->json($categorie);
    }
}
