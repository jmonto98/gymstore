<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class UseMode extends Model
{
    /**
     * USE MODE ATTRIBUTES
     * $this->attributes['id'] - int - contains the use mode primary key (id)
     * $this->attributes['videoUrl'] - string - contains the URL of the video demonstrating the product use
     * $this->attributes['product_id'] - int - contains the foreign key of the associated product
     * $this->attributes['created_at'] - timestamp - contains the creation date of the use mode
     * $this->attributes['updated_at'] - timestamp - contains the last update date of the use mode
     */
    protected $fillable = [
        'videoUrl',
        'product_id',
    ];

    public static function validate(Request $request): void
    {
        $request->validate([
            'videoUrl' => 'required|url',
            'product_id' => 'required|exists:products,id',
        ]);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }
    
    public function getVideoUrl(): string
    {
        return $this->attributes['videoUrl'];
    }

    public function setVideoUrl(string $videoUrl): void
    {
        $this->attributes['videoUrl'] = $videoUrl;
    }

    public function setProductId(int $productId): void
    {
        $this->attributes['product_id'] = $productId;
    }

    public function getProductId(): int
    {
        return $this->attributes['product_id'];
    }

    public function getId(): string
    {
        return $this->attributes['id'];
    }
}
