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


Route::get('/attendance', function () {
    return view('attendance');
})->middleware(['auth', 'verified'])->name('attendance');

Route::post('/attendance/punchIn',  
[DashboardController::class, 'punchIn'])->middleware(['auth', 'verified'])->name('punchIn');

Route::post('/attendance/punchOut',  
[DashboardController::class, 'punchOut'])->middleware(['auth', 'verified'])->name('punchOut');


Route::get('/accomplishment', function () {
    return view('accomplishment');
})->middleware(['auth', 'verified'])->name('accomplishment');


Route::get('/faqs', function () {
    return view('faqs');
})->middleware(['auth', 'verified'])->name('faqs');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// route for the user
// get request
Route::get('/users', [UserController::class,'index']);
Route::get('/user/{id}', [UserController::class,'show']);
Route::get('/user/{id}/edit', [UserController::class,'edit']);
Route::get('/user', [UserController::class,'create']);
//post request
Route::post('/user', [UserController::class,'store']);
Route::put('/user/{id}/update', [UserController::class,'update']);
Route::delete('/user/{id}', [UserController::class,'destroy']);


//route for the attendance
require __DIR__.'/auth.php';

//route for the accomplishment
// get request
Route::get('/accomplishment/{id}', [DashboardController::class, 'showAccomplishment']);
Route::get('/accomplishment/{id}/edit', [DashboardController::class, 'editAccomplishment']);
Route::get('/newAccomplishment/', [DashboardController::class, 'createAccomplishment']);
//post request
Route::post('/newAccomplishment/', [DashboardController::class, 'storeAccomplishment']);
Route::put('/accomplishment/{id}/update', [DashboardController::class, 'updateAccomplishment'])->name('accomplishment.update');