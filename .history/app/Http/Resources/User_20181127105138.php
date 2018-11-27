<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name'=> $request->user->name,
            'email'=>$request->user->email,
            'created_at'=>$request->user->created_at,
        ];
    }
}
