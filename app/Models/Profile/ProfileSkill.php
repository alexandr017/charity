<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileSkill extends Model
{
    use SoftDeletes;

    protected $table = 'skills';

    protected $fillable = [
        'profile_id',
        'skills_id',
    ];
}
