<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;


class GymMember extends Authenticatable
{
    protected $table = "gym_members";
    protected $fillable = [
        "name",
        "email",
        "password",
        "picture",
        "date_of_join",
        "expiration_date",
        "age",
        "weight",
        "height",
        "phone",
    ];
}
