<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //

    protected $fillable = ['store_ID', 'store_Name','store_Owner','store_Product'];

    protected $table = 'store';

}
