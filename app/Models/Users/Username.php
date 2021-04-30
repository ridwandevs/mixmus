<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Username extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'username'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
