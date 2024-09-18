<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating', 'comment', 'approved', 'user_id', 'product_id',
    ];

    public static function validate($request)
    {
        $request->validate([
            'rating' => 'required|numeric|gt:0',
            'comment' => 'required|max:255',
            'approved' => 'boolean', 
            'user_id' => 'required|exists:users,id', 
            'product_id' => 'required|exists:products,id', 
        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getRating(): int
    {
        return $this->attributes['rating'];
    }

    public function setRating(int $rating): void
    {
        $this->attributes['rating'] = $rating;
    }

    public function getComment(): string
    {
        return $this->attributes['comment'];
    }

    public function setComment(string $comment): void
    {
        $this->attributes['comment'] = ucfirst(strtolower($comment)); 
    }

    public function getApproved(): bool
    {
        return $this->attributes['approved'];
    }

    public function setApproved(bool $approved): void
    {
        $this->attributes['approved'] = $approved;
    }

    public function getUserId(): int
    {
        return $this->attributes['user_id'];
    }

    public function getProductId(): int
    {
        return $this->attributes['product_id'];
    }
}
