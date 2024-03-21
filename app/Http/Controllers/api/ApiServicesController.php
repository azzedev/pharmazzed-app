<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ApiServicesController extends Controller
{
    public function index(){
        $services = Service::all();
        return response()->json($services);
    }

    public function show($id){
        $service = Service::find($id);
        if(!$service) {
            return response()->json(['error' => 'Service non trouvee'], 404);
        }

        return response()->json($service);
    }
}
