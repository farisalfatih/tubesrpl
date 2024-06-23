<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShowFloorController;
use App\Http\Controllers\UpdateUserController;
use App\Http\Controllers\CorrectFloorController;
use App\Http\Controllers\AdminDashboardController;

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


Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/floor{id}', [ShowFloorController::class, 'show'])->name('floors.show');

Route::post('/submit-floor/{id}', [CorrectFloorController::class, 'submitFloor'])->name('submit_floor')->middleware('auth');

Route::get('/score', function () {
    return view('score');
});

Route::get('/dosen-dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
