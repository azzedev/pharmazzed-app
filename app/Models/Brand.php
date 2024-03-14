<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'image',
        'partner',
    ];

    public function products()
    {
        return $this->hasMany(Products::class,'brand_id', 'id');
    }
}
