<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{

    public function chart() {
        $data = DB::select('
        select name, number
        from faculties inner join 
            (select faculty_id, count(faculty_id) as number
            from profiles
            group by faculty_id) as other_table
        on faculties.id = other_table.faculty_id
        ');
        return $data;
    }
}
