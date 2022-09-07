<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryStudentController extends Controller
{
    public function index()
    {
        return view('front-end.history-student-account');
    }
}
