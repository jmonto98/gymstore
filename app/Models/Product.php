<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'stock', 'image', 'sumReviews', 'totalReviews', 'category_id',
    ];

    public static function validate($request)
    {
        $request->validate([
            "name" => "required|max:255",
            "price" => "required|numeric|gt:0",
            "stock" => "required|numeric|gt:0",
            'image' => 'image',
            "category_id" => "required",
        ]);
    }

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

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getPrice(): int
    {
        return $this->attributes['price'];
    }

    public function setPrice(int $price): void
    {
        $this->attributes['price'] = $price;
    }

    public function getStock(): int
    {
        return $this->attributes['stock'];
    }

    public function setStock(int $stock): void
    {
        $this->attributes['stock'] = $stock;
    }

    public function getImage(): string
    {
        return $this->attributes['image'];
    }

    public function setImage(string $image): void
    {
        $this->attributes['image'] = $image;
    }

    public function getSumReviews(): int
    {
        return $this->attributes['sumReviews'];
    }

    public function setSumReviews(int $sumReviews): void
    {
        $this->attributes['sumReviews'] = $sumReviews;
    }

    public function getTotalReviews(): int
    {
        return $this->attributes['totalReviews'];
    }

    public function setTotalReviews(int $totalReviews): void
    {
        $this->attributes['totalReviews'] = $totalReviews;
    }

    public function getCategoryId(): int
    {
        return $this->attributes['category_id'];
    }
}
