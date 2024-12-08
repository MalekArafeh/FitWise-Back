<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{ 
    //

    protected $fillable = ['id', 'Name','Email','Phone','availability','password','class_ID'];


    protected $table = 'trainer';

}
