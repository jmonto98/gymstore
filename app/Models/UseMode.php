<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UseMode extends Model
{
    use HasFactory;

    protected $fillable = [
        'videoUrl', 'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getVideoUrl()
    {
        return $this->attributes['videoUrl'];
    }

    public function setVideoUrl($videoUrl)
    {
        $this->attributes['videoUrl'] = $videoUrl;
    }

    public function getProductId()
    {
        return $this->attributes['product_id'];
    }

    public function setProductId($product_id)
    {
        $this->attributes['product_id'] = $product_id;
    }
}
