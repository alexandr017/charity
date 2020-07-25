<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileSubscriber extends Model
{
    use SoftDeletes;

    protected $table = 'profile_subscribers';

    protected $fillable = [
        'profile_id',
        'on_profile_id',
    ];
}
