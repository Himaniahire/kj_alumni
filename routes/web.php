<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('index');
});

Route::controller(App\Http\Controllers\HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});

Route::controller(App\Http\Controllers\AlumniRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('alumni.register');
    Route::get('/login', 'login')->name('login');
    Route::post('/alumni/store', 'store')->name('alumni.store');
    Route::post('/alumni/login', 'loginAlumni')->name('alumnilogin');
});

Route::group(['prefix' => '/alumni', 'middleware' => 'auth:alumni'], function () {
    Route::controller(App\Http\Controllers\AlumniPanelController::class)->group(function () {
        Route::get('/', 'index')->name('alumni.index');
        Route::get('/profile', 'profile')->name('alumni.profile');
        Route::put('/profile/update/{id}', 'update')->name('alumni.profile.update');
        Route::get('/alumni/logout', function () {
            Session::flush();
            return redirect()->route('login');
        })->name('alumni.logout');
    });
});

Route::group(['prefix' => '/admin', 'middleware' => 'auth:web'], function () {
    Route::controller(App\Http\Controllers\AdminController::class)->group(function () {
        Route::get('/', 'index')->name('admin.index');
        Route::get('/admin/logout', function () {
            Session::flush();
            return redirect()->route('login');
        })->name('admin.logout');
    });
    Route::controller(App\Http\Controllers\AlumniController::class)->group(function () {
        Route::get('/alumnis', 'index')->name('alumnis.index');
        Route::get('/alumnis/show', 'show')->name('alumnis.show');
        Route::delete('/alumnis/{id}', 'destroy')->name('alumnis.destroy');


    });

    Route::resource('/roles', controller: App\Http\Controllers\RoleController::class);

});
