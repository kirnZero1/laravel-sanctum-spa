<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;


Route::post('/user/register',[AuthController::class, 'register']);
Route::post('/user/login',[AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
Route::get('/products',[ProductController::class, 'index']);
// Route::group(['middleware' => ['auth:sanctum']], function(){
// Route::get('/products',[ProductController::class, 'index']);
Route::post('/user/logout',[AuthController::class, 'logout']);
Route::post('/products/store',[ProductController::class, 'store']);
Route::get('/products/{id}',[ProductController::class, 'show']);
Route::put('/products/{id}',[ProductController::class, 'update']);
Route::delete('/products/{id}',[ProductController::class, 'destroy']);
Route::get('/products/search/{name}',[ProductController::class, 'search']);
});

// Route::get('/products',[ProductController::class, 'index']);
// Route::post('/products/store',[ProductController::class, 'store']);
// Route::get('/products/{id}',[ProductController::class, 'show']);
// Route::put('/products/{id}',[ProductController::class, 'update']);
// Route::delete('/products/{id}',[ProductController::class, 'destroy']);

// Route::get('/products/search/{name}',[ProductController::class, 'search']);

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// Route::get('/', function () {
//     return Product::all();
// });

// Route::post('/products', function () {
//     return Product::create([
//         'name' => 'Product_one',
//         "slug" => 'product-one',
//         'description' => "This is product one",
//         'price' => "1.22"
//     ]);
// });