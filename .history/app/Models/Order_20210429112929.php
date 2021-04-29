<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    public $timestamp = false;
    protected $fillable = [
        'name',
        'id_products',
        'product_quantity',
        'date',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
