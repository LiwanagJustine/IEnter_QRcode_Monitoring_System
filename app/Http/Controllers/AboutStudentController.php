<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutStudentController extends Controller
{
    public function index()
    {
        return view('front-end.about-student-account');
    }
}
