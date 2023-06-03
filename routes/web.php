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

Route::namespace("App\Http\Controllers")->group(function () {

    Route::namespace("Auth\Login")->group(function () {

        Route::get('/login', IndexController::class)->name('login');

    });

    Route::get('/', HomeController::class)->name('home');
    Route::get('/schedule', ScheduleController::class)->name('schedule');
    Route::get('/homework', HomeworkController::class)->name('homework');
    Route::get('/performance', PerformanceController::class)->name('performance');

    Route::namespace("Course")->group(function () {

        Route::get('/courses', IndexController::class)->name('course.index');

    });

});


