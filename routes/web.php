<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){
    Route::match(['get','post'],'login', 'AdminController@login');
    Route::match(['get','post'],'register', 'AdminController@register');

    // Admin dashboard route
    Route::group(['middleware'=>['admin']], function() {
        Route::get('dashboard', 'AdminController@dashboard');

        // Update admin password
        Route::match(['get', 'post'], 'profile-update','AdminController@updateAdminPassword');

        //  admin password check
        Route::post('check-admin-password','AdminController@checkAdminPassword');

        // Update admin profile
        Route::match(['get', 'post'], 'update-details', 'AdminController@updateProfileDetails');

        // Vendor Profile
        Route::match(['get', 'post'], 'vendor-details/{slug}', 'AdminController@updateVendorDetails');

        // Admin Logout
        Route::get('logout', 'AdminController@logout');

        Route::get('my_shop', 'AdminController@my_shop');
    });
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
