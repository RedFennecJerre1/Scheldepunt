<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'content',
        'cleaness_rating',
        'kindness_rating',
        'neighbourhood_rating',
        'overal_rating',
    ];
}