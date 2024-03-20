<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
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
Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('LoginPage');
})->name('login');

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
//loginAction
Route::post('login', [LoginController::class, 'loginAction']);


// admin account
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/scan', function () {
    return view('admin.scanner');
});
Route::get('/admin/studentInfo', function () {
    return view('admin.students_info');
});
Route::controller(ParentController::class)->group(function () {
    Route::get('/admin/parentInfo', 'index')->name('parents.index');
    Route::delete('/admin/{parent}', 'destroy')->name('parents.destroy');
    Route::post('/admin/parentInfo', 'store');
});




//parent account
Route::get('/parent/dashboard', function () {
    return view('parent.dashboard');
});
Route::get('/parent/schedule', function () {
    return view('parent.schedule');
});
Route::get('/parent/profile', function () {
    return view('parent.profile');
});


//student account
Route::get('/student/dashboard', function () {
    return view('student.dashboard');
});
Route::get('/student/schedule', function () {
    return view('student.schedule');
});
Route::get('/student/profile', function () {
    return view('student.profile');
});
