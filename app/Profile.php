<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        "gender",
        "ethnicity",
        "is_studying",
        "level_id",
        "faculty_id",
        "graduation",
        "is_employed",
        "salary",
        "contract_type",
        "is_work_related_to_study"
    ];
}
