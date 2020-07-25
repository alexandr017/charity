<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectTask extends Model
{
    use SoftDeletes;

    protected $table = 'project_tasks';

    protected $fillable = [
        'name',
        'task_description',
        'icon_url',
        'status_id',
    ];
}
