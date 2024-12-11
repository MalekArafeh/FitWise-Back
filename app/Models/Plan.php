<?php

namespace App\Models;

use App\Models\GymMember;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{

    protected $fillable = ['plan_Name', 'plan_Price', 'plan_Period', 'plan_Description', 'time'];

    protected $table = 'plans';
    public function gymMembers(): BelongsToMany
    {
        return $this->belongsToMany(GymMember::class, 'plan_members', 'mem_ID', 'plan_id');
    }
}
