<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function orders()
    {
        return $this->hasMany(Category::class);
    }

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'image_url',
        'stock',
        'discount',
    ];
}
