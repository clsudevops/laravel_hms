<?php

namespace HMS;

use Illuminate\Database\Eloquent\Model;

class RoomTypeModel extends Model
{
    protected $table = 'roomtypes';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
