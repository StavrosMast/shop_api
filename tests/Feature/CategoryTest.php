<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $data = [
            'name' => 'Category1',
        ];
        $response = $this->postJson('/api/shop-categories',$data);
        $response->assertStatus(200);
    }
}