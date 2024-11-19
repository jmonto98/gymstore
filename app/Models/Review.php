<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class Review extends Model
{
    /**
     * REVIEW ATTRIBUTES
     * $this->attributes['id'] - int - contains the review primary key (id)
     * $this->attributes['rating'] - int - contains the rating given by the user (1 to 5)
     * $this->attributes['comment'] - string - contains the user's review comment
     * $this->attributes['approved'] - boolean - indicates if the review has been approved by an admin
     * $this->attributes['user_id'] - int - contains the foreign key of the associated user
     * $this->attributes['product_id'] - int - contains the foreign key of the associated product
     * $this->attributes['created_at'] - timestamp - contains the creation date of the review
     * $this->attributes['updated_at'] - timestamp - contains the updating date of the review
     */
    protected $fillable = [
        'rating', 'comment', 'approved', 'user_id', 'product_id',
    ];

    public static function validate(Request $request): void
    {
        $request->validate([
            'rating' => 'required|numeric|gt:0',
            'comment' => 'required|max:255',
            'approved' => 'boolean',
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
        ]);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo
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
