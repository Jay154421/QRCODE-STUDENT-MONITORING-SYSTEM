<?php

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
Route::get('/', function(){
    return view('LoginPage');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/studentInfo', function () {
    return view('admin.students_info');
});

Route::get('/admin/parentInfo', function () {
    return view('admin.parents_info');
});

Route::get('/scan', function(){
    return view('admin.scanner');
});


Route::post('/admin/Dashboard', [LoginController::class, 'loginAction'])->name('admin.login');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
