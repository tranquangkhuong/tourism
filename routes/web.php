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

route::get('sweetalert', [Controller::class, 'sweetAlert']);

route::get('/', function () {
    return view('index');
    // echo __('message.welcome', ['name' => 'khuong']);
    // echo '<br/>';
    // echo __('Welcome to website', ['name' => 'khuong']);
});

Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('/standard_list', function () {
    return view('standard_list');
});

// Route::get('/form', function () {
//     //
// })->name('form.login_register');
