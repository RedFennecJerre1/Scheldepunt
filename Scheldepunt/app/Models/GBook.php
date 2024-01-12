<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'gbookuser_name',
        'gbookcontent',
    ];
}