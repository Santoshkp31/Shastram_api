<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.////////// This is Transformer
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'fname'=> $this->fname,
            'mname'=> $this->mname,
            'lname'=> $this->lname,
            'gender'=> $this->gender,
            'role' => $this->role,
            'department'=> $this->department,
            'semester'=> $this->semester,
            'email'=> $this->email,
            'password'=> $this->password
        ];
    }
}
