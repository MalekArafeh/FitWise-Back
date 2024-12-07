<?php

namespace App\Models;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
    public function plans(): BelongsToMany
    {
        return $this->belongsToMany(Plan::class, 'plan_members', 'mem_ID', 'plan_id');
    }
}
