<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryOrder extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function deliveryAddress()
    {
        return $this->belongsTo(DeliveryAddress::class);
    }

    public function deliveryCompany()
    {
        return $this->belongsTo(DeliveryCompany::class);
    }

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }

    public function trackingDeliveryStatus()
    {
        return $this->hasMany(TrackingDeliveryStatus::class);
    }

    public function deliveryReturns()
    {
        return $this->hasMany(DeliveryReturn::class);
    }
}
