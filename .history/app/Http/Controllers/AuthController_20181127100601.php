<?php

namespace App\Http\Controllers;

use App\User;
// use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;

class AuthController extends Controller
{
    public function register(UserRegisterRequest $request){
        if(isset($request->password)){
            $request->password=bcrypt($request->password);
        }
        $user = User::create($request->all());

        return $user;
    }
}
