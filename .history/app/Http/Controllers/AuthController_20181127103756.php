<?php

namespace App\Http\Controllers;

use App\User;
// use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Resources\User as UserResource;

class AuthController extends Controller
{
    public function register(UserRegisterRequest $request){

        if(isset($request->password)){
            $request->password=bcrypt($request->password);
        }
        // dd($request->password);
        $user = User::create($request->all());
        dd($user);
        return new UserResource($user);
    }
}
