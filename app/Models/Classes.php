<?php

namespace App\Models;

use Carbon\carbon;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Trainer;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    //
    protected $fillable = ['Name', 'end_date', 'start_date', 'class_Location', 'class_Capacity'];

    protected $table = 'classes';
    public function trainers(): BelongsToMany
    {
        return $this->belongsToMany(trainer::class, 'trainer_classes', 'class_id', 'trainer_id');
    }

    public function getStartTimeAttribute()
    {
        return Carbon::parse($this->start_date)->format('h:i a');
    }

    public function getEndTimeAttribute()
    {
        return Carbon::parse($this->end_date)->format('h:i a');
    }

    public function getDateAttribute()
    {
        return Carbon::parse($this->start_date)->format('l, F j, Y');
    }
}
