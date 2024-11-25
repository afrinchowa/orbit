<?php

use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TemplateController::class, 'index']);
// guest middleware
Route::group(['prefix' => 'account'], function () {
    Route::group(['middleware' => 'guest'], function () {

        Route::get('login', [LoginController::class, 'index'])->name('account.login');
        Route::get('register', [LoginController::class, 'register'])->name('account.register');
        Route::post('process-register', [LoginController::class, 'processRegister'])->name('account.processRegister');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
    });

    // authenticated middleware
    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('account.logout');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('account.dashboard');
    });
});

Route::group(['prefix' => 'admin'], function () {
    // guest middleware for admin
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');

        Route::post('authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });


    // authenticated middleware for admin
    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
        Route::get('category', function () {
            return view('admin.category.index');
        });
        Route::controller(ServiceController::class)->group(function () {
            Route::get('/services',  'index')->name('services.index');
            Route::get('/services/create',  'create')->name('services.create');
            Route::post('/services',  'store')->name('services.store');
            Route::get('/services/{service}/edit',  'edit')->name('services.edit');
            Route::put('/services/{service}',  'update')->name('services.update');
            Route::delete('/services/{service}',  'destroy')->name('services.destroy');
        });
    });
});

// Route for the Home page
Route::get('/home', function () {
    return view('navigations.home');
})->name('home');
// Route for the About Us page
Route::get('/about', function () {
    return view('navigations.about');
})->name('about');

// Route for the Services page
Route::get('/services', function () {
    return view('navigations.services');
})->name('services');

// Route for the Contact Us page
Route::get('/contact', function () {
    return view('navigations.contact');
})->name('contact');