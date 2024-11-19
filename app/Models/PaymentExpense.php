<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentExpense extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function expense()
    {
        return $this->belongsTo(Expense::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}
