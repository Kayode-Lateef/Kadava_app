<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacebookAd extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_url',
        'title_link',
        'ad_id',
        'status',
        'fetched_at',
        'sponsored',
        'button',
        'title',
        'description',
        'avatar',
        'target_description',
        'target_url',
        'target_button',
    ];
}
