<?php

namespace HMS\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'roomNo' => $this->roomNo,
            'type'=> $this->type,
            'floor' => $this->floor,
            'rate'=> $this->rate,
            'rateperhour'=> $this->rateperhour
        ];
    }
    public function with($request){
        return[
            'version' => '1.0.0',
            'author' => 'mjrc'
        ];
    }
}
