<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Shop;

class ShopOwner extends Authenticatable
{
    use HasApiTokens, Notifiable, HasFactory;
    protected $fillable = ['id','name','email','password'];
    public function shops(){
        return $this->hasMany(Shop::class);
    }
    
}