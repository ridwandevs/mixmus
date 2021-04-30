<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\Auth\AuthRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $auth;

    public function __construct()
    {
        $this->auth = new AuthRepository();
    }

    public function signInWithEmail(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $auth = $this->auth->signinWithEmail($data);

        return $auth;
    }

    public function registerWithEmail(Request $request)
    {
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ];

        $register= $this->auth->registerWithEmail($data);

        return $register;
    }
}
