<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarStudentController extends Controller
{
    public function index()
    {
        return view('front-end.calendar-student-account');
    }
}
