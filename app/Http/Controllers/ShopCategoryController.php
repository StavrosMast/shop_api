<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopCategory;

class ShopCategoryController extends Controller
{
    public function category(Request $request){
        $shop = new ShopCategory();
        $shop->name = $request->input('name');
    
        $shop->save();
    
        // Return a response indicating successful shop creation
        return response()->json(['message' => 'Shop category created successfully'], 200);
    }
}