<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class Product extends Model
{
    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['name'] - string - contains the product name
     * $this->attributes['description'] - string - contains the product description
     * $this->attributes['price'] - int - contains the product price
     * $this->attributes['stock'] - int - contains the product stock
     * $this->attributes['image'] - string - contains the product image
     * $this->attributes['sumReviews'] - int - contains the sum of the product reviews
     * $this->attributes['totalReviews'] - int - contains the total number of reviews of the product
     * $this->attributes['category_id'] - int - contains the foreign key of the associated category
     * $this->attributes['state'] - string - contains the product state (e.g., 'active', 'inactive')
     * $this->attributes['created_at'] - timestamp - contains the creation date of the product
     * $this->attributes['updated_at'] - timestamp - contains the last update date of the product
     */
    protected $fillable = [
        'name',
        'price',
        'stock',
        'image',
        'sumReviews',
        'totalReviews',
        'category_id',
        'state',
    ];

    public static function validate(Request $request): void
    {
        $request->validate([

            'name' => 'required|max:255',
            'price' => 'required|numeric|gt:0',
            'stock' => 'required|numeric|gt:0',
            'image' => 'nullable|image',
            'category_id' => 'required|exists:categories,id',
            'state' => 'required|string',
        ]);
    }

    public function getAverageRatingData()
    {
        $averageRating = round($this->reviews->avg('rating'), 1);
        $fullStars = floor($averageRating);
        $halfStar = $averageRating - $fullStars >= 0.5;

        return [
            'averageRating' => $averageRating,
            'fullStars' => $fullStars,
            'halfStar' => $halfStar,
            'totalReviews' => $this->reviews->count()
        ];
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

    public function useModes(): HasMany
    {
        return $this->hasMany(UseMode::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }

    public static function sumPricesByQuantities($products, $productsInSession): int
    {
        $total = 0;
        foreach ($products as $product) {
            $total = $total + ($product->getPrice() * $productsInSession[$product->getId()]);
        }

        return $total;
    }

    public function getId(): string
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    public function setDescription(string $description): void
    {
        $this->attributes['description'] = $description;
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

    public function setCategoryId(int $categoryId): void
    {
        $this->attributes['category_id'] = $categoryId;
    }

    public function getState(): string
    {
        return $this->attributes['state'];
    }

    public function setState(string $state): void
    {
        $this->attributes['state'] = $state;
    }
}
