<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'image_url',
        'day',
        'time',
        'image_url2',
        'trailer_url'
    ];
    use HasFactory;
}
