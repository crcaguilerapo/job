<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

/*
select name, number
from faculties inner join 
    (select faculty_id, count(faculty_id) as number
    from profiles
    group by faculty_id) as other_table
on faculties.id = other_table.faculty_id
*/

class ProfileController extends Controller
{
    public function store(Request $request) {
        Profile::create($request->all());
        return ['created' => true];
    }

    public function update(Request $request, $id) {
        $profile = Profile::find($id);
        $profile->update($request->all());
        return ['updated' => true];
    }

    public function show($id)
    {
        return Profile::find($id);
    }

    public function destroy($id)
    {
        Profile::destroy($id);
        return ['deleted' => true];
    }

}
