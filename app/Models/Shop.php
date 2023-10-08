<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ShopOwner;
use App\Models\ShopCategory;
use App\Models\Offer;

class Shop extends Model
{
    use HasFactory;
    public function shopOwner(){
        return $this->belongsTo(ShopOwner::class);
    }

    public function category() {
        return $this->belongsTo(ShopCategory::class, 'shop_category_id');
    }
    public function offers() {
        return $this->hasMany(Offer::class);
    }
}