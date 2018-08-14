<?php

namespace HMS;

use Illuminate\Database\Eloquent\Model;

class RoomModel extends Model
{
    protected $table = 'vw_rooms';
    protected $primaryKey = 'roomNo';
    public $timestamps = false;

    public function scopeSearch($query, $search){
        return $query->where('roomNo', 'like', '%'.$search.'%')
                ->orWhere('type', 'like', '%'.$search.'%');
    }
}
