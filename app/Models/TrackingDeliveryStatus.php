<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingDeliveryStatus extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function deliveryOrder()
    {
        return $this->belongsTo(DeliveryOrder::class);
    }
}