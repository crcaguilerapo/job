<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    //
    public function courses() {
        return $this->hasMany(Course::class);
    }
}
