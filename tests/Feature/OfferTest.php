<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Notification;
use App\Models\User;



class OfferTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_offer(): void
    {
        $this->withoutMiddleware();

        $data = [
            'name' => 'offer1',
            'description' => 'this is the first test offer',
            'shop_id' => '3',
        ];
        $shop_id = $data['shop_id'];
        $response = $this->postJson('/api/shops/{$shop_id}/offers',$data);
        $response->assertStatus(200);

        // $response->assertStatus(200);
    }
}