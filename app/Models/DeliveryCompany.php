<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryCompany extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function deliveryOrders()
    {
        return $this->hasMany(DeliveryOrder::class);
    }
}
