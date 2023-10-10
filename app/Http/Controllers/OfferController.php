<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Shop;
use App\Models\User;
use App\Notifications\OfferCreated;
use Illuminate\Support\Facades\Notification;

class OfferController extends Controller
{

    public function store(Request $request, Shop $shop)
    {
        // Check if the authenticated user is the owner of the shop
        // if (auth()->user()->id !== $shop->shop_owner_id) {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }
    
        // Validate the incoming data for the offer (e.g., name, description)
        // You can use custom validation rules if needed
    
        // Create a new offer for the shop
        $offer = new Offer();
        $offer->name = $request->input('name');
        $offer->description = $request->input('description');
        $offer->shop_id = $request->input('shop_id');
        // $offer->shop_id = $shop->id;
    
        $offer->save();
        
        $users = User::all();
        //Send notification to all users
        $message = 'Offer created';
        Notification::send($users, new OfferCreated($message));
        // $user->notify(new OfferCreated($message));
    
        // Return a response indicating successful offer creation
        return response()->json(['message' => 'Offer created successfully'], 200);
    }

}