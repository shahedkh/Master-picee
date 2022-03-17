<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function user(){
        $this->belongsTo(User::class);
    }
    use HasFactory;

    protected $fillable = [
        'user_id',
        'movie_id',
        'day',
        'time'
    ];
}
