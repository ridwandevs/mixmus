<?php

namespace App\Repositories\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthRepository
{
    public function signinWithEmail($data)
    {
        $user = User::where('email', $data['email'])->first();

        if (Hash::check($data['password'], $user->password))
        {
            $response = [
                'success' => 1,
                'token' => $user->createToken('app')->accessToken
            ];

        }else{

            $response = [
                'success' => 0,
            ];
        }

        return response()->json($response);
    }

    public function registerWithEmail($data)
    {
        $user = User::create($data);

        return response()->json([
            'success' => 1,
            'token' => $user->createToken('app')->accessToken
        ]);
    }
}
