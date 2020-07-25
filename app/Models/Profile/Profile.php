<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;

    protected $table = 'profiles';

    protected $fillable = [
        'first_name',
        'last_name',
        'nik_name',
        'birth_day',
        'profile_type',
        'photo_url',
        'profile_description',
        'email_verified_at',
        'phone',
        'password',
    ];

}
