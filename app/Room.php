<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $fillable = ['id', 'status', 'room_number'];
    protected $primaryKey = 'room_number';


    
}
