<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;

class UserController extends Controller
{
    public function form() {
        return Faculty::all();
    }
}
