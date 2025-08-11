<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    protected $table = 'techs';
    protected $fillable = ['name'];

    public function projects() {
        return $this->belongsToMany(Project::class);
    }
}
