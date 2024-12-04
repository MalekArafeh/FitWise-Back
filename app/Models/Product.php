<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable = ['prod_ID', 'pro_Name','pro_price','pro_Description','pro_Instock'];


    protected $table = 'product';

}
