<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name'=> $request->name,
            'email'=>$request->email,
            'created_at'=>$request->created_at,
        ];
    }
}
