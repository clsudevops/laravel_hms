<?php

namespace HMS;

use Illuminate\Database\Eloquent\Model;

class RoomModel extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'roomNo';
    public $timestamps = false;
}
