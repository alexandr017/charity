<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectTaskStatuses extends Model
{
    use SoftDeletes;

    protected $table = 'project_task_statuses';

    protected $fillable = [
        'name',
    ];
}
