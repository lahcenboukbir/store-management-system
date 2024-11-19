<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function debts()
    {
        return $this->hasMany(Debt::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function deliveryAddresses()
    {
        return $this->hasMany(DeliveryAddress::class);
    }

    public function productReturns()
    {
        return $this->hasMany(ProductReturn::class);
    }

    public function blacklistCustomer()
    {
        return $this->hasOne(BlacklistedCustomer::class);
    }
}
