<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdCampaign extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function adPlatform()
    {
        return $this->belongsTo(AdPlatform::class);
    }
}
