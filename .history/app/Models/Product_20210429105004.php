<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'available_quantity',
        'id_supplier',
    ];

    // One to Many relationships inverse
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    // One to Many relationships inverse
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
