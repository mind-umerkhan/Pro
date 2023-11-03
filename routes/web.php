<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Company\JobController as CompanyJobController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Company\RegisterController;
use App\Http\Controllers\User\UserController as UserUserController;
use App\Http\Controllers\WelcomeController;

// Define the default route for the application
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Define a route for the "panding" view with a custom name
Route::get('/panding', function () {
    return view('panding');
})->name('panding');


Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');


// Define authentication-related routes using Laravel's built-in Auth routes
Auth::routes();

// Define routes related to company registration
Route::post('company/post', [CompanyController::class, 'registerStore'])->name('register.store');
Route::get('company/register', [CompanyController::class, 'registerView'])->name('register.view');

// Create a group of routes that require authentication
Route::middleware(['auth'])->group(function () {

    // Define a route for logging out
    Route::get('logout', [DashboardController::class, 'logout'])->name('logout1');

    // Define a dashboard route for authenticated users
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // Define routes for admin-related actions

    // Define routes for admin users
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.admin');
    Route::middleware(['admin_auth'])->group(function () {

        Route::controller(UserController::class)
            ->prefix('admin/')
            ->name('admin.')
            ->group(function () {
                Route::get('users', 'index')->name('users');
                Route::get('user/delete/{id}', 'destroy')->name('destroy');
            });

        // Define routes for company-related actions
        Route::controller(CompanyController::class)
            ->prefix('admin/')
            ->name('company.')
            ->group(function () {
                Route::get('company', 'index')->name('index');
                Route::get('company/delete/{id}', 'destroy')->name('destroy');
                Route::get('company/edit/{id}', 'edit')->name('edit');
                Route::post('company/update/{id}', 'update')->name('update');
                Route::post('approve-user/{user}',  'approveUser')->name('approve.user');
            });


        // Define routes for Jobs-related actions
        Route::controller(JobController::class)
            ->prefix('jobs/')
            ->name('job.')
            ->group(function () {
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('delete/{id}', 'destroy')->name('destroy');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
            });
    });


    // <----------------------############################################--------------------------------------->
    //company routes

    Route::middleware(['company_auth'])->group(function () {
        // Route::get('company/dashboard', [RegisterController::class, 'dashboard'])->name('dashboard.comapny');

        Route::controller(CompanyJobController::class)
            ->prefix('jobs/company/')
            ->name('company.job.')
            ->group(function () {
                Route::get('index', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('delete/{id}', 'destroy')->name('destroy');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
            });
    });


    //User Routes
    Route::get('user/jobs', [WelcomeController::class, 'userShowJobs'])->name('user.jobs');
});
