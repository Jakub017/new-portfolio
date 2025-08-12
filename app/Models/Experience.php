<?php

namespace App\Models;

use App\Models\Tech;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['position', 'company', 'date', 'description'];

    public function techs() {
        return $this->belongsToMany(Tech::class);
    }
}
