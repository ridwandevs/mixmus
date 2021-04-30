<?php

namespace App\Repositories\User;

use App\Models\Users\Username;
use Illuminate\Support\Facades\Auth;

class UsernameRepository
{

    public function createUsername($data)
    {
        $user = Auth::user();


        $username = $user->username->create(['username' => $data['username']]);

        $response = [
            'success' => 1,
            'message' => 'Username created'
        ];

        return response()->json($response);
    }

    public function showUsername()
    {

    }

    public function updateUsername()
    {

    }
}
