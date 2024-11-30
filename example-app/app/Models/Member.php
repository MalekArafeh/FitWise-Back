<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
//example-app/app/Models/Member.php

class Member extends Authenticatable
{
    //
    protected $fillable = ['mem_name', 'mem_age', 'mem_phone', 'mem_mail', 'mem_height', 'mem_width', 'mem_photo', 'mem_password', 'mem_substatus', 'date_of_join', 'expiration_date'];

    protected $hidden = [
        'mem_password', // كلمة المرور
    ];


    protected $table = 'members';
}
