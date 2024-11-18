<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Date;

class Order extends Model
{
    /**
     * ORDER ATTRIBUTES
     * $this->attributes['id'] - int - contains the order primary key (id)
     * $this->attributes['orderDate'] - date - contains the order date
     * $this->attributes['status'] - string - contains the order status (e.g., 'pending', 'shipped', 'delivered')
     * $this->attributes['totalOrder'] - int - contains the total order amount
     * $this->attributes['cusPayment'] - string - contains the customer's payment method
     * $this->attributes['user_id'] - int - contains the foreign key of the associated user
     * $this->attributes['created_at'] - timestamp - contains the creation date of the order
     * $this->attributes['updated_at'] - timestamp - contains the last update date of the order
     */
    protected $fillable = [
        'orderDate', 'status', 'totalOrder', 'cusPayment', 'user_id',
    ];

    public static function validate($request): void
    {
        $request->validate([

            'status' => 'required|',
            'totalOrder' => 'required|numeric|gt:0',
            'cusPayment' => 'required|string',
            'user_id' => 'required',
        ]);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getOrderDate(): date
    {
        return $this->attributes['orderDate'];
    }

    public function setOrderDate(): void
    {
        $this->attributes['orderDate'] = now();
    }

    public function getStatus(): string
    {
        return $this->attributes['status'];
    }

    public function setStatus(string $status): void
    {
        $this->attributes['status'] = $status;
    }

    public function getTotalOrder(): int
    {
        return $this->attributes['totalOrder'];
    }

    public function setTotalOrder(int $totalOrder): void
    {
        $this->attributes['totalOrder'] = $totalOrder;
    }

    public function getCusPayment(): string
    {
        return $this->attributes['cusPayment'];
    }

    public function setCusPayment(string $cusPayment): void
    {
        $this->attributes['cusPayment'] = $cusPayment;
    }

    public function getUserId(): int
    {
        return $this->attributes['user_id'];
    }

    public function setUserId($userId): void
    {
        $this->attributes['user_id'] = $userId;
    }
}
