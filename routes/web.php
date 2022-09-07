<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\HomeStudentController;
use App\Http\Controllers\MapStudentController;
use App\Http\Controllers\CalendarStudentController;
use App\Http\Controllers\HistoryStudentController;
use App\Http\Controllers\AboutStudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/visitors', [VisitorController::class, 'index'])->name('visitors.index');

Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');
Route::get('/sign-in', [SigninController::class, 'index'])->name('sign-in.index');
Route::get('/sign-up', [SignupController::class, 'index'])->name('sign-up.index');
Route::get('/student-account', [HomeStudentController::class, 'index'])->name('student.account');
Route::get('/map', [MapStudentController::class, 'index'])->name('map.index');
Route::get('/calendar', [CalendarStudentController::class, 'index'])->name('calendar.index');
Route::get('/history', [HistoryStudentController::class, 'index'])->name('history.index');
Route::get('/about-us', [AboutStudentController::class, 'index'])->name('about-us.index');

Auth::routes();
