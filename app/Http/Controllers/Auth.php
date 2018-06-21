<?php

namespace App\Http\Controllers;
use App\Users;

use Illuminate\Http\Request;
use JWTAuth;
use JWTException;

class Auth extends Controller
{
    public function login(Request $request)
    {
        $user = Users::where(['email'=>$request->email,'password'=>sha1($request->password) ])->first();
        $token = ($user) ? JWTAuth::fromUser($user) : false;
        return ["token" => $token];
    }
}
