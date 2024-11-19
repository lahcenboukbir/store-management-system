<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DebtPayment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function debt()
    {
        return $this->belongsTo(Debt::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}
