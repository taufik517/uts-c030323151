<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    // Relasi One-to-Many dengan tabel natural_resources
    public function naturalResources()
    {
        return $this->hasMany(NaturalResource::class);
    }
}
