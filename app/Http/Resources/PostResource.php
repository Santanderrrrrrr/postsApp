<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        return [ 
            'name'=> $this->name,
            'content'=> $this->content,
            'reserved'=> $this->reserved,
            'phonenumber'=> $this->phonenumber


        ];
    }
}
