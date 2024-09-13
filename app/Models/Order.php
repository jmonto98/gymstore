<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderDate', 'status', 'totalOrder', 'cusPayment', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function getOrderDate()
    {
        return $this->attributes['orderDate'];
    }

    public function setOrderDate($orderDate)
    {
        $this->attributes['orderDate'] = $orderDate;
    }

    public function getStatus()
    {
        return $this->attributes['status'];
    }

    public function setStatus($status)
    {
        $this->attributes['status'] = $status;
    }

    public function getTotalOrder()
    {
        return $this->attributes['totalOrder'];
    }

    public function setTotalOrder($totalOrder)
    {
        $this->attributes['totalOrder'] = $totalOrder;
    }

    public function getCusPayment()
    {
        return $this->attributes['cusPayment'];
    }

    public function setCusPayment($cusPayment)
    {
        $this->attributes['cusPayment'] = $cusPayment;
    }

    public function getUserId()
    {
        return $this->attributes['user_id'];
    }

    public function setUserId($user_id)
    {
        $this->attributes['user_id'] = $user_id;
    }
}
