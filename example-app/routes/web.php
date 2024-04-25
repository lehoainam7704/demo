<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\UsersController;
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
Route::get('/cruduser', function () {
    return view('cruduser');
});
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
// Route cho hiển thị form đổi mật khẩu
Route::get('/change-password', [ChangePassword::class, 'showChangePasswordForm'])->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'changePassword'])->name('change-password.post');
// Route cho đăng xuất
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/users', [UsersController::class, 'index'])->name('show.users');