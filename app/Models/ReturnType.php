<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function productReturns()
    {
        return $this->hasMany(ProductReturn::class);
    }
}
