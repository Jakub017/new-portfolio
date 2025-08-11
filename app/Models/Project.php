<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'excerpt', 'description', 'slug', 'image', 'link'];

    public function techs() {
        return $this->belongsToMany(Tech::class);
    }
}
