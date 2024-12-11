<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Health extends Authenticatable
{
    protected $table = "Health";
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
