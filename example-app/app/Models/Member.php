<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $fillable = ['mem_name','mem_age', 'mem_phone','mem_mail','mem_height','mem_width','mem_photo','mem_password','mem_substatus','date_of_join'];


    protected $table = 'members';

}
