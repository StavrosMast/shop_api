<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming data (e.g., name, shop owner, shop category, description, etc.)
        // You can use custom validation rules if needed
    
        // Create a new shop record
        $shop = new Shop();
        $shop->name = $request->input('name');
        $shop->shop_owner_id = auth()->user()->id; // Assuming you're using authentication
        $shop->shop_category_id = $request->input('shop_category_id');
        $shop->description = $request->input('description');
        $shop->open_hours = $request->input('open_hours');
        $shop->city = $request->input('city');
        $shop->address = $request->input('address'); // Optional
    
        $shop->save();
    
        // Return a response indicating successful shop creation
        return response()->json(['message' => 'Shop created successfully'], 200);
    }

    public function update(Request $request, Shop $shop)
    {
        // Check if the authenticated user is the owner of the shop
        if (auth()->user()->id !== $shop->shop_owner_id) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    
        // Validate and update the shop information (e.g., name, description, open hours, etc.)
        // You can use custom validation rules if needed
    
        // Save the updated shop information
        $shop->name = $request->input('name');
        $shop->description = $request->input('description');
        $shop->open_hours = $request->input('open_hours');
        $shop->city = $request->input('city');
        $shop->address = $request->input('address'); // Optional
    
        $shop->save();
    
        // Return a response indicating successful shop update
        return response()->json(['message' => 'Shop updated successfully'], 200);
    }

    // Shop List (Guest Users)
    public function index()
    {
        // Retrieve a list of shops
        $shops = Shop::all(); // You can customize this query as needed

        // Return a JSON response with the list of shops
        return response()->json(['shops' => $shops], 200);
    }

    // Shop Details (Guest Users)
    public function show(Shop $shop)
    {
        // Retrieve details of a specific shop
        // The $shop parameter is automatically injected based on the route parameter

        if (!$shop) {
            // Shop not found, return a 404 response
            return response()->json(['error' => 'Shop not found'], 404);
        }

        // Return a JSON response with the shop details
        return response()->json(['shop' => $shop], 200);
    }

}