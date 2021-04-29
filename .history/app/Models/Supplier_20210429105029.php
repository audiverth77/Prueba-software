<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'telephone',
    ];

    // One to Many relationships
    // A Profile could have none to many Products
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
