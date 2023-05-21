<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ConferenceController;

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

Route::get('/', [ConferenceController::class, 'index'])->name('home.index');
Route::get('/create', [ConferenceController::class, 'create'])->name('create');
Route::get('/update/{id}', [ConferenceController::class, 'update'])->name('update');

Route::get('/delete/{id}', [ConferenceController::class, 'delete'])->name('delete');
Route::post('/submit', [ConferenceController::class, 'submit'])->name('submit');
Route::post('/edit', [ConferenceController::class, 'edit'])->name('edit');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
