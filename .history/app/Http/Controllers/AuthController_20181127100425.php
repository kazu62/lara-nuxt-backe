<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        $this->validate($request,[

        ]);
        if(isset($request->password)){
            $request->password=bcrypt($request->password);
        }
        $user = User::create($request->all());

        return $user;
    }
}
