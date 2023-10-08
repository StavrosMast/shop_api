<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopOwner;

class ShopOwnerController extends Controller
{
    public function register(Request $request)
    {
        // Validate the incoming data (e.g., name, email, password)
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:shop_owners,email',
            'password' => 'required|min:6',
        ]);
    
        // Create a new shop owner record
        $shopOwner = new ShopOwner();
        $shopOwner->name = $validatedData['name'];
        $shopOwner->email = $validatedData['email'];
        $shopOwner->password = bcrypt($validatedData['password']);
        $shopOwner->save();
    
        // Return a response indicating successful registration
        return response()->json(['message' => 'Shop owner registered successfully'], 200);
    }

    public function login(Request $request)
    {
        // Validate the incoming data (e.g., email and password)
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Attempt to authenticate the shop owner
        if (auth()->attempt($validatedData)) {
            // Authentication successful, generate and return an API token
            $token = auth()->user()->createToken('API Token')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            // Authentication failed, return an error response
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

}