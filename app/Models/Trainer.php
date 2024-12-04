<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{ 
    //

    protected $fillable = ['trainer_ID', 'trainer_name','trainer_mail','trainer_phone','trainer_availability','class_ID'];


    protected $table = 'trainer';

}
