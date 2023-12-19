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

// Route::get('/users',  
// [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('users');

// Route::get('/users/create',  
// [UserController::class, 'create'])->middleware(['auth', 'verified'])->name('user_create');

// Route::get('/users/edit/{id}',  
// [UserController::class, 'edit'])->middleware(['auth', 'verified'])->name('user_edit');

// Route::get('/users/show/{id}',  
// [UserController::class, 'show'])->middleware(['auth', 'verified'])->name('user_show');





Route::get('/attendance', function () {
    return view('attendance');
})->middleware(['auth', 'verified'])->name('attendance');

Route::post('/attendance/punchIn',  
[DashboardController::class, 'punchIn'])->middleware(['auth', 'verified'])->name('punchIn');


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

// Route::get('/user', function() {
//     $user = App\Models\Users::find(auth()->user()->id);

//     return $user->role->role;
// })


//route for the attendance
// Route::get('/attendance', [AttendanceController::class,'index']);
// Route::get('/attendance/{id}', [AttendanceController::class,'show']);
// Route::get('/attendance/{id}/edit', [AttendanceController::class,'edit']);
// Route::get('/attendance/', [AttendanceController::class,'create']);
// Route::post('/attendance/', [AttendanceController::class,'store']);
// Route::put('/attendance/{id}/update', [AttendanceController::class,'update']);
// Route::delete('/attendance/{id}', [AttendanceController::class,'destroy']);

Route::get('/accomplishments', [AccomplishmentController::class, 'index']);
Route::get('/accomplishments/{id}', [AccomplishmentController::class, 'show']);
Route::get('/accomplishments/{id}/edit', [AccomplishmentController::class, 'edit']);
Route::get('/accomplishments/', [AccomplishmentController::class, 'create']);
Route::post('/accomplishments/', [AccomplishmentController::class, 'store']);
Route::put('/accomplishments/{id}/update', [AccomplishmentController::class, 'update']);
Route::delete('/accomplishments/{id}', [AccomplishmentController::class, 'destroy']);

require __DIR__.'/auth.php';
