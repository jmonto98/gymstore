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

    public static function validate($request)
    {
        $request->validate([
            "videoUrl" => "required|string",
            "product_id" => "required",
        ]);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getVideoUrl(): string
    {
        return $this->attributes['videoUrl'];
    }

    public function setVideoUrl(string $videoUrl): void
    {
        $this->attributes['videoUrl'] = $videoUrl;
    }

    public function getProductId(): int
    {
        return $this->attributes['product_id'];
    }

}
