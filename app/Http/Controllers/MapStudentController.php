<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapStudentController extends Controller
{
    public function index()
    {
        return view('front-end.map-student-account');
    }
}
