<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectNecessarySkill extends Model
{
    use SoftDeletes;

    protected $table = 'project_necessary_skills';

    protected $fillable = [
        'project_id',
        'skill_id',
    ];
}
