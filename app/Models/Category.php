<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    /**
     * CATEGORY ATTRIBUTES
     * $this->attributes['id'] - int - contains the category primary key (id)
     * $this->attributes['name'] - string - contains the category name
     * $this->attributes['description'] - string - contains the category description
     * $this->attributes['created_at'] - timestamp - contains the creation date of the category
     * $this->attributes['updated_at'] - timestamp - contains the last update date of the category
     * $this->attributes['image'] - string - contains the category image
     */

    protected $fillable = [
        'name',
        'description',
        'image'
    ];

    public static function validate($request): void   
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image',
        ]);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
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
        $this->attributes['name'] = ucwords(strtolower($name));
    }

    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    public function setDescription(string $description): void
    {
        $this->attributes['description'] = ucwords(strtolower($description));
    }

    public function getImage(): string
    {
        return $this->attributes['image'];
    }

    public function setImage(string $image): void
    {
        $this->attributes['image'] = $image;
    }

    public function getCreatedAt(): mixed
    {
        return $this->attributes['created_at'];
    }

    public function setCreatedAt(mixed $createdAt): void
    {
        $this->attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt(): mixed
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt(mixed $updatedAt): void
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
}
