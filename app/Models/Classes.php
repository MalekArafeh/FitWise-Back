<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    //
    protected $fillable = ['Name','Time','Date','class_Location','class_Capacity','id'];

    protected $table = 'classes';

}
