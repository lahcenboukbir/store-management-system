<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function debtPayments()
    {
        return $this->hasMany(DebtPayment::class);
    }

    public function paymentExpenses()
    {
        return $this->hasMany(PaymentExpense::class);
    }
}
