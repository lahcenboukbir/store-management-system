<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function productAttributeValues()
    {
        return $this->hasMany(ProductAttributeValue::class);
    }

    public function saleItems()
    {
        return $this->hasMany(SaleItem::class);
    }

    public function productReturns()
    {
        return $this->hasMany(ProductReturn::class);
    }
}
