<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function type()
    {
        return $this->belongsTo(type::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(technology::class);
    }
}
