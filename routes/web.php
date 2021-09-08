<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
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

Route::get('sweetalert', [Controller::class, 'sweetAlert']);

Route::get('/', function () {
    return view('index');
});


Route::get('/standard-list', function () {
    return view('standard_list');
});

Route::get('/detail-tour', function () {
    return view('detail_tour');
});

Route::get('/contact-us', function () {
    return view('contact_us');
});

Route::get('/blog', function () {
    return view('blog_masonry');
});

Route::get('/about-us', function () {
    return view('about_us');
});

// ==================================================Admin==========================
// page admin
Route::get('/admin', function () {
    return view('admin.homeadmin');
});

//slider
Route::get('/admin/slider', function () {
    return view('admin.slider.listslider');
});
Route::get('/admin/add-slider', function () {
    return view('admin.slider.addslider');
});

// area location.
Route::get('/admin/area-location', function () {
    return view('admin.arealocation.manage_location');
});
Route::get('/admin/add-location', function () {
    return view('admin.arealocation.add_location');
});
// tour.
Route::get('/admin/tour', function () {
    return view('admin.tour.manage_tour');
});

Route::get('/admin/add-tour', function () {
    return view('admin.tour.add_tour');
});
Route::get('/admin/testtour', function () {
    return view('admin.tour.testtour');
});

// upload-images
Route::post('upload-images','ImagesController@store');

// account.
Route::get('/admin/login', function () {
    return view('admin.account.login');
});

Route::get('/admin/register.', function () {
    return view('admin.account.register');
});






Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('login', [LoginController::class, 'login'])->name('login');
