<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ParentController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Student\StudentAccountController;
use App\Http\Controllers\Student\ScheduleController;
use App\Http\Controllers\Parent\ParentAccountController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//test
Route::get('/test', [testController::class, 'showChildren']);
Route::post('/test', [testController::class, 'changePassword'])->name('password');

//LoginPage
Route::get('/', function () {
    return view('LoginPage');
})->name('login');


// Login Action
Route::get('/load', [LoginController::class, 'loadLogin']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('login', [LoginController::class, 'loginAction']);

Route::get('/admin/student/{idnumber}', [AdminController::class, 'fetchStudent'])->name('fetch.student');

// Admin account
Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    Route::post('/store', [AdminController::class, 'store'])->name('scan');
    Route::get('/scan', [AdminController::class, 'showAttendance']);

    //Student CRUD
    Route::controller(StudentController::class)->group(function () {
        Route::get('/admin/studentInfo', 'index')->name('students.index');
        Route::delete('/admin/studentInfo/{student}', 'destroy')->name('students.destroy');
        Route::put('/admin/studentInfo/{student}', 'update')->name('students.update');
        Route::post('/admin/studentInfo', 'store')->name('students.store');
    });

    // Parent CRUD
    Route::controller(ParentController::class)->group(function () {
        Route::get('/admin/parentInfo', 'index')->name('parents.index');
        Route::delete('/admin/parentInfo/{parent}', 'destroy')->name('parents.destroy');
        Route::put('/admin/parentInfo/{parent}', 'update')->name('parents.update');
        Route::post('/admin/parentInfo', 'store')->name('parents.store');
    });
});


// Parent account
Route::group(['middleware' => 'parent'], function () {
    Route::post('/parent/change-password', [ParentAccountController::class, 'changePassword'])->name('parent.change-password');
    Route::get('/parent/dashboard/', [ParentAccountController::class, 'showDashboard'])->name('parent.dashboard');
    Route::get('/parent/schedule/', [ParentAccountController::class, 'showSchedule'])->name('parent.schedule');
    Route::get('/profile/profile', [ParentAccountController::class, 'showProfile'])->name('parent.profile');
});

//Student account
Route::group(['middleware' => 'student'], function () {
    Route::get('/student/dashboard', [StudentAccountController::class, 'showDashboard'])->name('student.dashboard');
    Route::get('/student/profile', [StudentAccountController::class, 'showProfile'])->name('student.profile');
    Route::post('/student/change-password', [StudentAccountController::class, 'changePassword'])->name('student.change-password');

    Route::get('/student/schedule', [ScheduleController::class, 'index'])->name('schedule');
    Route::post('/student/schedule', [ScheduleController::class, 'store'])->name('schedule.store');
    Route::put('/student/schedule/{schedule}', [ScheduleController::class, 'update'])->name('schedule.update');
    Route::delete('/student/schedule/{schedule}', [ScheduleController::class, 'destroy'])->name('schedule.destroy');
});
