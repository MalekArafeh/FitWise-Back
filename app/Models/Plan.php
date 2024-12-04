<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
   
    protected $fillable = ['plan_ID', 'plan_Name','plan_Price','plan_Period','plan_Description','time'];

    protected $table = 'plans';
}
