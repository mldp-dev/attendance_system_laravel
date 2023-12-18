<?php

use App\Http\Controllers\AccomplishmentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ProfileController;
// dont forget to import controller
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;


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

//pass to controller method 
Route::get('/dashboard',  
[DashboardController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/users',  
[UserController::class, 'show'])->middleware(['auth', 'verified'])->name('users');

Route::get('/users/create',  
[UserController::class, 'create'])->middleware(['auth', 'verified'])->name('user_create');

Route::get('/users/edit/{id}',  
[UserController::class, 'edit'])->middleware(['auth', 'verified'])->name('user_edit');

Route::get('/attendance', function () {
    return view('attendance');
})->middleware(['auth', 'verified'])->name('attendance');

Route::get('/accomplishment', function () {
    return view('accomplishment');
})->middleware(['auth', 'verified'])->name('accomplishment');
Route::get('/add-accomplishment', [AccomplishmentController::class,'addAccomplishment']);
Route::post('/save-accomplishment', [AccomplishmentController::class,'saveAccomplishment']);
Route::post('/edit-accomplishment/{id}', [AccomplishmentController::class,'editAccomplishment']);
Route::post('/update-accomplishment', [AccomplishmentController::class,'updateAccomplishment']);

Route::get('/faqs', function () {
    return view('faqs');
})->middleware(['auth', 'verified'])->name('faqs');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
