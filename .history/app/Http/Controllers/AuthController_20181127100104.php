<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        $this->validate($request,[
            'email'=>'email|required|unique:users,email',
            'name'=>'required',
            'password'=>'required|min:6'
        ]);
        if(isset($request->password)){
            $request->password=bcrypt($request->password);
        }
        $user = User::create($request->all());

        return $user;
    }
}
