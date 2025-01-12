<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinterestAd extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_url',
        'board_name',
        'title',
        'description',
    ];
}
