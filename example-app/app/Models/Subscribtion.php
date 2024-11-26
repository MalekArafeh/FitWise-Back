<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscribtion extends Model
{
    //

    protected $fillable = ['sub_ID', 'sub_Type','sub_status','renwal_Date','sub_Price','plan_ID'];


    protected $table = 'subsicribtion';

}
