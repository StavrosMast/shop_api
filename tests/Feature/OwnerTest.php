<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OwnerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_shop_owner_register() //test passed created user
    {
        $data = [
            'name' => 'test_owner2',
            'email' => 'test2@test.com',
            'password' => 'test1234',
        ];
        $response = $this->postJson('/api/shop-owners/register',$data);
        $response->assertStatus(200);
    }
}