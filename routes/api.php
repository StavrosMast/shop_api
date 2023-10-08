<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopOwnerController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ShopCategoryController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Shop Owner Registration
Route::post('shop-owners/register', 'App\Http\Controllers\ShopOwnerController@register');



// Shop Owner Login
Route::post('shop-owners/login', 'App\Http\Controllers\ShopOwnerController@login');

// Shop Creation
// Route::post('shops', [ShopController::class,'store']);
Route::post('shops', 'App\Http\Controllers\ShopController@store');

Route::put('shops/{shop}', 'App\Http\Controllers\ShopController@update');
Route::delete('shops/{shop}', 'App\Http\Controllers\ShopController@destroy');

// Creating an Offer for a Shop
Route::post('shops/{shop}/offers', 'App\Http\Controllers\OfferController@store');

// Shop List (Guest Users)
Route::get('shops-list', 'App\Http\Controllers\ShopController@index');

// Shop Details (Guest Users)
Route::get('shops/{shop}', 'App\Http\Controllers\ShopController@show');

// // Shop Categories
Route::post('/shop-categories', 'App\Http\Controllers\ShopCategoryController@category'); // Create a new shop category
// Route::get('/shop-categories', 'ShopCategoryController@index'); // List all shop categories
// Route::get('/shop-categories/{shopCategory}', 'ShopCategoryController@show'); // View details of a specific shop category