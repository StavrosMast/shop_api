<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\ShopController;

class ShopTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_shop() //test passed
    {
        // $response = $this->get('/api/shops');
        $data = [
                    'shop_owner_id' => '1',
                    'shop_category_id' =>'',
                    'name' => 'Shop1',
                    'description' => 'Shop1 description',
                    'open_hours' => '10:00-21:00',
                    'city' => 'Thessaloniki',
                    'address' => 'Egnatia 1',
                ];
        $response = $this->postJson('/api/shops',$data);
        $response->assertStatus(201);
    }
    // public function test_shop_owner_register() //test passed created user
    // {
    //     // $response = $this->get('/api/shop-owners/register');
    //     $data = [
    //         'name' => 'test_owner',
    //         'email' => 'test@test.com',
    //         'password' => 'test123',
    //     ];
    //     $response = $this->postJson('/api/shop-owners/register',$data);
    //     $response->assertStatus(201);
    // }
    // public function test_shop_owner_login()
    // {
    //     // $response = $this->get('/api/shop-owners/login');
    //     $data = [
    //         'email' => 'test@test.com',
    //         'password' => 'test123',
    //     ];
    //     $response = $this->postJson('/api/shop-owners/login',$data);

    //     $response->assertStatus(200);
    // }
}