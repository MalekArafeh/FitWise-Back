<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //


    protected $fillable = ['program_ID', 'program_Name','program_Weights','program_Repeat'];


    protected $table = 'program';

}
