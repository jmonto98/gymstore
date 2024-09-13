<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Illuminate\Validation\Rules\In;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderDate', 'status', 'totalOrder', 'cusPayment', 'user_id',
    ];

    public static function validate($request)
    {
        $request->validate([
            "orderDate" => "required|date",
            "status" => "required|",
            "totalOrder" => "required|numeric|gt:0",
            "cusPayment" => "required|string",
            "user_id" => "required",
        ]);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function getOrderDate(): date
    {
        return $this->attributes['orderDate'];
    }

    public function setOrderDate(date $orderDate): void
    {
        $this->attributes['orderDate'] = $orderDate;
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
}
