<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    //

    protected $fillable = ['plan_ID', 'plane_Name','plan_Price','plan_Period','plane_Description','time'];

    protected $table = 'plane';

}
