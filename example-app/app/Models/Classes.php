<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    //
    protected $fillable = ['class_Name', 'class_Schedual'
    ,'class_Location','class_Capacity','trainer_ID'];

    protected $table = 'classes';

}
