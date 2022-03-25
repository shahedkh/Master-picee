<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    public function movie(){
        return $this->belongsTo(Movie::class);
    }
    protected $fillable = [
        'movie_id',
        'reserved',
        'seat_number'
    ];
    use HasFactory;
}
