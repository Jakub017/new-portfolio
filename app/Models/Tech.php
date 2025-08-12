<?php

namespace App\Models;

use App\Models\Project;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    protected $table = 'techs';
    protected $fillable = ['name'];

    public function projects() {
        return $this->belongsToMany(Project::class);
    }

    public function experiences() {
        return $this->belongsToMany(Experience::class);
    }
}
