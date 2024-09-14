<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description',
    ];

    public static function validate($request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
        ]);
    }
    
    public function products()
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
