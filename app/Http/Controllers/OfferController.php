<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    public function store(Request $request, Shop $shop)
    {
        // Check if the authenticated user is the owner of the shop
        if (auth()->user()->id !== $shop->shop_owner_id) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    
        // Validate the incoming data for the offer (e.g., name, description)
        // You can use custom validation rules if needed
    
        // Create a new offer for the shop
        $offer = new Offer();
        $offer->name = $request->input('name');
        $offer->description = $request->input('description');
        $offer->shop_id = $shop->id;
    
        $offer->save();
    
        // Return a response indicating successful offer creation
        return response()->json(['message' => 'Offer created successfully'], 201);
    }

}