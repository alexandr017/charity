<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectLink extends Model
{
    use SoftDeletes;

    protected $table = 'project_links';

    protected $fillable = [
        'project_id',
        'title',
        'icon_url',
        'link',
];

}
