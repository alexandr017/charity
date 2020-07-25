<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileType extends Model
{
    use SoftDeletes;

    protected $table = 'profile_types';

    protected $fillable = ['name'];
}
