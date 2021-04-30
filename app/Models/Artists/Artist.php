<?php

namespace App\Models\Artists;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'artists_name',
        'artists_photo',
        'artists_cover',
        'artist_bio',
        'instagram',
        'facebook',
        'twitter'
    ];
}
