<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Parents;
use App\Models\Student;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.student-nav', function ($view) {
            // Assuming the student's ID is stored in the session
            $studentId = session('student_id');
            $student = Student::find($studentId);
            $view->with('student', $student);
        });

        View::composer('layouts.parent-nav', function ($view) {
            // Assuming the parent's ID is stored in the session
            $parentId = session('parent_id');
            $parent = Parents::find($parentId);
            $view->with('parent', $parent);
        });
    }
}
