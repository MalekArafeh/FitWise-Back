<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //

    protected $fillable = ['notType', 'notDate','notTime'];


    protected $table = 'notification';

}