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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getRating()
    {
        return $this->attributes['rating'];
    }

    public function setRating($rating)
    {
        $this->attributes['rating'] = $rating;
    }

    public function getComment()
    {
        return $this->attributes['comment'];
    }

    public function setComment($comment)
    {
        $this->attributes['comment'] = $comment;
    }

    public function getApproved()
    {
        return $this->attributes['approved'];
    }

    public function setApproved($approved)
    {
        $this->attributes['approved'] = $approved;
    }

    public function getUserId()
    {
        return $this->attributes['user_id'];
    }

    public function setUserId($user_id)
    {
        $this->attributes['user_id'] = $user_id;
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
