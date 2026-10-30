<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Landing (template Amping)
|--------------------------------------------------------------------------
*/
Route::controller(LandingController::class)->name('landing.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/activities', 'activities')->name('activities');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/testimonial', 'testimonial')->name('testimonial');
});

/*
|--------------------------------------------------------------------------
| Admin (template Xeloro)
|--------------------------------------------------------------------------
*/
Route::controller(AdminController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/calendar', 'calendar')->name('calendar');
    Route::get('/forms', 'forms')->name('forms');
    Route::get('/login', 'login')->name('login');
    Route::get('/datatables', 'datatables')->name('datatables');
    Route::get('/sweetalerts', 'sweetalerts')->name('sweetalerts');
});
