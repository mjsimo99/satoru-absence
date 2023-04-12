<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\adminTeacherController;
use App\Http\Controllers\adminStudentController;
use App\Http\Controllers\adminModulController;
use App\Http\Livewire\AdminModuleList;
use App\Http\Controllers\studentController;

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
Route::post('/admin/{id}/status', [AdminController::class, 'updateStatus'])->name('admin.updateStatus');

Route::resource('adminTeacher', adminTeacherController::class);
Route::post('/adminTeacher/{id}/status', [adminTeacherController::class, 'updateStatus'])->name('adminTeacher.updateStatus');

Route::resource('adminStudent', adminStudentController::class);
Route::post('/adminStudent/{id}/status', [adminStudentController::class, 'updateStatus'])->name('adminStudent.updateStatus');

Route::resource('adminModul', adminModulController::class);











Route::get('/admin-module-list', AdminModuleList::class);



// Route::resource('students', studentController::class);



Route::get('/students', function () {
    return view('students.index');
});



// });
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



