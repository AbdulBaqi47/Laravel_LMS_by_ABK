<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('su')->group(function () {

    Route::get('/dashboard', 'App\Http\Controllers\SuperAdmin\DashboardController@index')->middleware('role:super_admin');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\Admin\DashboardController@index')->middleware('role:admin');

});

Route::prefix('teacher')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\Teacher\DashboardController@index')->middleware('role:teacher');

});

Route::prefix('student')->group(function () {
    // a student can access the dashboard when he want to enroll in a course
    // a student can access the dashboard when he want to view his enrolled courses
    // a student can access the dashboard when he want to view his grades
    // a student can access the dashboard when he want to view his profile
    // a student can access the dashboard when he want to view his account settings
    // a student can access the dashboard when he want to view his class schedule
    // a student can access the dashboard when he want to view his class attendance
    // a student can access the dashboard when he want to view his class activities
    // a student can access the dashboard when he want to view his class quizzes
    // a student can access the dashboard when he want to view his class exams
    // a student can access the dashboard when he want to view his class projects
    // a student can access the dashboard when he want to view his class assignments
    // a student can access the dashboard when he want to view his class discussions
    // a student can access the dashboard when he want to view his class announcements
    // a student can access the dashboard when he want to view his class files
    // a student can access the dashboard when he want to view his class grades
    // a student can access the dashboard when he want to view his class members
    // a student can access the dashboard when he want to view his instructor
    // a student can access the dashboard when he want to view his class
    Route::get('/', 'App\Http\Controllers\Student\DashboardController@index')->middleware('role:student');

});

