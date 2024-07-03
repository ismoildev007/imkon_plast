<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'price_id',
        'title_uz',
        'title_ru',
        'title_en',
        'price',
    ];

    public function prices()
    {
        return $this->belongsTo(PriceCategory::class, 'price_id');
    }
}
