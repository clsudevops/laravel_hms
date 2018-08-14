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
            'type'=> $this->roomType,
            'floor' => $this->floor
        ];
    }
}
