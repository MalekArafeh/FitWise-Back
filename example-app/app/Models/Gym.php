<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Gym extends Authenticatable
{
    //
    protected $fillable = ['gym_name',
                         'gym_description',
                         'gym_rate',
                         'password'
                        ,'gym_location'
                        ,'gym_photos'
                        ,'gym_mail'
                        ,'gym_phone'
                        ,'gym_machines'];

    protected $table = 'gym';

}
