<?php

namespace App\Http\Controllers;

use App\User;
// use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Resources\User as UserResource;

class AuthController extends Controller
{
    public function register(UserRegisterRequest $request){
        // dd($request->password);
        $user = User::create([
            'email'=>$request->email,
            'name'=>$request->name,
            'passworn'=>bcrypt($request->password)
        ]);
        dd($user);
        return new UserResource($user);
    }
}
