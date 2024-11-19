<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function debtPayments()
    {
        return $this->hasMany(DebtPayment::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
