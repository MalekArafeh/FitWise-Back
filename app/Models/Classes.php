<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Trainer;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    //
    protected $fillable = ['Name','Time','Date','class_Location','class_Capacity','id'];

    protected $table = 'classes';
    public function trainers(): BelongsToMany
    {
        return $this->belongsToMany(trainer::class, 'trainer_classes', 'class_id', 'trainer_id');
    }

}
