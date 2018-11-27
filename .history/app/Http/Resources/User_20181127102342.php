<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name'=> $user->name,
            'email'=>$user->email,
            'created_at'=>$user->created_at,
        ];
    }
}
