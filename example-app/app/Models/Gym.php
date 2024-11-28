<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    //
    protected $fillable = ['gym_name',
                         'gym_description',
                         'gym_rate'
                        ,'gym_location'
                        ,'gym_photos'
                        ,'gym_mail'
                        ,'gym_phone'
                        ,'gym_machines'];

    protected $table = 'gym';

}
