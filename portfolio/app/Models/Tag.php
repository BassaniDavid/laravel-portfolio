<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // colleghiamo i progetti
    public function Projects() {
        return $this->belongsToMany(Project::class);
    }
}
