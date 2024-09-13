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
}
