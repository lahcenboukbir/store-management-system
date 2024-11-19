<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlacklistReason extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function blacklistedCustomers()
    {
        return $this->hasMany(BlacklistedCustomer::class);
    }
}
