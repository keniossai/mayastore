<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
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
        Route::match(['get', 'post'], 'update-details', 'AdminController@updateAdminDetails');

        // Vendor Profile
        Route::match(['get', 'post'], 'vendor-profile/{slug}', 'AdminController@updateVendorDetails');

        // view vendor detail
        Route::get('view-vendor-profile/{id}', 'AdminController@viewVendorDetails');

        // View admins | Subadmins, Vendors, Users
        Route::get('admins/{type?}', 'AdminController@admins');

        Route::post('update-admin-status', 'AdminController@updateAdminStatus');

        // Section Route
        Route::get('sections', 'SectionController@index');
        Route::post('update-section-status', 'SectionController@updateSectionStatus');
        Route::get('delete-section/{id}', 'SectionController@deleteSection');
        // Add section
        Route::post('add-section', 'SectionController@addSection');
        Route::patch('update-section/{id?}', 'SectionController@updateSection');

        // category Route
        Route::get('/categories', 'CategoryController@index');
        Route::post('update-category-status', 'CategoryController@updateCategoryStatus');
        Route::get('create-category', 'CategoryController@create');
        // Route::post('/add-category', 'CategoryController@store');
        Route::post('/add-category', [CategoryController::class, 'store'])->name('store.category');
        Route::get('edit-category/{id?}', [CategoryController::class, 'edit'])->name('edit.category');
        Route::put('update-category/{id?}', [CategoryController::class, 'update'])->name('update.category');
        Route::get('append-category-level', [CategoryController::class, 'appendCategoryLevel']);
        // Route::patch('/update-category{id?}', 'CategoryController@store');
        // Route::match(['get', 'post'], 'add-edit-category', 'CategoryController@storeEditCategory');
        Route::get('delete-category/{id}', 'CategoryController@destroy');

        // Product Routes
        Route::get('/products', [ProductController::class, 'index'])->name('products');



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
