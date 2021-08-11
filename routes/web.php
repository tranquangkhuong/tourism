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


Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('login', [LoginController::class, 'login'])->name('login');
