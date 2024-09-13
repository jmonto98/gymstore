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

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getPrice()
    {
        return $this->attributes['price'];
    }

    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }

    public function getStock()
    {
        return $this->attributes['stock'];
    }

    public function setStock($stock)
    {
        $this->attributes['stock'] = $stock;
    }

    public function getImage()
    {
        return $this->attributes['image'];
    }

    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }

    public function getSumReviews()
    {
        return $this->attributes['sumReviews'];
    }

    public function setSumReviews($sumReviews)
    {
        $this->attributes['sumReviews'] = $sumReviews;
    }

    public function getTotalReviews()
    {
        return $this->attributes['totalReviews'];
    }

    public function setTotalReviews($totalReviews)
    {
        $this->attributes['totalReviews'] = $totalReviews;
    }

    public function getCategoryId()
    {
        return $this->attributes['category_id'];
    }

    public function setCategoryId($category_id)
    {
        $this->attributes['category_id'] = $category_id;
    }
}
