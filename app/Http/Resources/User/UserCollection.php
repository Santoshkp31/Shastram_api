<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;        // Remove collection from ResourceCollection

class UserCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->fname.' '.$this->mname.' '.$this->lname,
            'gender' => $this->gender,
            'role' =>$this->role,
            'semester'=>$this->semester,
            'email' => $this->email,
            'href' =>[
                'link'=> route('users.show',$this->id)
            ]
        ];
    }
}
