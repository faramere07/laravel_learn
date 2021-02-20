<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ApplicantController;

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
//Auth routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

//admin
Route::get('/admin/Home', [AdminController::class, 'home'])->name('adminHome');
Route::get('/admin/Managers', [AdminController::class, 'managers'])->name('adminManagers');
Route::get('/admin/Applications', [AdminController::class, 'applications'])->name('adminApplications');
Route::get('/admin/Openings', [AdminController::class, 'openings'])->name('adminOpenings');
Route::post('/createOpening', [AdminController::class, 'createOpening'])->name('createOpening');

//manager
Route::get('/manager/Dashboard', [ManagerController::class, 'dashboard'])->name('managerDashboard');
Route::get('/manager/Home', [ManagerController::class, 'home'])->name('managerHome');

//applicants
Route::get('/applicant/Home', [ApplicantController::class, 'home'])->name('applicantHome');

Route::get('/', function () {
	return view('pages.index');
})->name('index')->middleware('guest');

Route::get('/gallery', function () {
	return view('pages.gallery');
})->name('gallery')->middleware('guest');

Route::get('/faq', function () {
	return view('pages.faq');
})->name('faq')->middleware('guest');

