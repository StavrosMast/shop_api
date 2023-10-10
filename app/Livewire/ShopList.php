<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Shop;

class ShopList extends Component
{
    public function render()
    {
        return view('livewire.shop-list',['shops' => Shop::all()]);
    }
}