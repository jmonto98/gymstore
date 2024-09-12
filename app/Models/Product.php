<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'stock', 'image', 'sumReviews', 'totalReviews', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function useModes()
    {
        return $this->hasMany(UseMode::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
