<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function category(){
        return $this->belongsTo(Movie::class);
    }
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'image_url',
        'day',
        'time'
    ];
    use HasFactory;
}
