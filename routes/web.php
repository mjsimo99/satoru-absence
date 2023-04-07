<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;

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

Route::resource('admin', adminController::class);

// Route::get('/', function () {
//     return view('admin.admin');
// });
Route::get('/atea', function () {
    return view('admin.teachers');
});
Route::get('/astu', function () {
    return view('admin.students');
});
Route::get('/amodule', function () {
    return view('admin.module');
});
Route::get('/student', function () {
    return view('students.profile');
});
Route::get('/teachers', function () {
    return view('teachers.science');
});
Route::get('/tabsence', function () {
    return view('teachers.absence');
});

Route::get('/users', [UserController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



