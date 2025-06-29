<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = ['category_id', 'name', 'slug', 'description',
                        'image', 'price', 'stock']; 

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }         
    
    public function cart() 
    {
        return $this->hasMany(Cart::class);
    }          

    public function orders() 
    {
        return $this->belongsToMany(Order::class)->withPivot('qty', 'price')
        ->withTimestamps();
    }
}

