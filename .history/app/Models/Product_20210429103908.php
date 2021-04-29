<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    // One to Many relationships inverse
    public function profile(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }
}
