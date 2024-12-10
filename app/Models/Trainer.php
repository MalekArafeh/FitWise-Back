<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\classes;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{ 
    //

    protected $fillable = ['id', 'Name','Email','Phone','availability','password','class_ID'];


    protected $table = 'trainer';
    public function classes(): BelongsToMany
    {
        return $this->belongsToMany(classes::class, 'trainer_classes', 'class_id', 'trainer_id');
    }
}
