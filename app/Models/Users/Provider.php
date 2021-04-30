<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'provider_name',
        'provider_token',
        'username',
        'email'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
