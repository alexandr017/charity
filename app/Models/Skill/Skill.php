<?php

namespace App\Models\Skill;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use SoftDeletes;

    protected $table = 'skills';

    protected $fillable = [
        'name',
    ];
}
