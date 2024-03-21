<?php

use App\Http\Controllers\api\ApiBrandController;
use App\Http\Controllers\api\ApiCategoriesController;
use App\Http\Controllers\api\ApiProductsController;
use App\Http\Controllers\api\ApiServicesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/brands', [ApiBrandController::class, 'index']);
Route::get('/brands/{id}', [ApiBrandController::class, 'show']);

Route::get('/categories', [ApiCategoriesController::class, 'index']);
Route::get('/categories/{id}', [ApiCategoriesController::class, 'show']);

Route::get('/products', [ApiProductsController::class, 'index']);
Route::get('/products/{id}', [ApiProductsController::class, 'show']);
Route::get('categories/{id}/products', [ApiProductsController::class, 'getProductByCategory']);
Route::get('brand/{id}/products', [ApiProductsController::class, 'getProductByBrand']);

Route::get('/services', [ApiServicesController::class, 'index']);
Route::get('/services/{id}', [ApiServicesController::class, 'show']);
