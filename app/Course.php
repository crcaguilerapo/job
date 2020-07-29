<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Faculty;

class Course extends Model
{
    public function faculty() {
        return $this->belongsTo(Faculty::class);
    }
}
