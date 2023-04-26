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
use App\Http\Controllers\affectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\scienceController;
use App\Http\Controllers\absenceController;
use App\Http\Controllers\teacherabsencefilterController;

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


Route::get('/admin-module-list', AdminModuleList::class);
Route::get('/users', [UserController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    Route::resource('admin', adminController::class);
    Route::post('/admin/{id}/status', [AdminController::class, 'updateStatus'])->name('admin.updateStatus');

    Route::resource('adminTeacher', adminTeacherController::class);
    Route::post('/adminTeacher/{id}/status', [adminTeacherController::class, 'updateStatus'])->name('adminTeacher.updateStatus');

    Route::resource('adminStudent', adminStudentController::class);
    Route::post('/adminStudent/{id}/status', [adminStudentController::class, 'updateStatus'])->name('adminStudent.updateStatus');

    Route::resource('adminModul', adminModulController::class);
});



Route::group(['middleware' => ['auth', 'role:Student']], function () {
    Route::get('/students', function () {
        return view('students.index');
    })->name('students.index');
});


Route::group(['middleware' => ['auth', 'role:Teacher']], function () {
    Route::resource('absence', absenceController::class);
    Route::match(['get', 'post'], '/teacher/absences/filter', [absenceController::class, 'filterByCne'])->name('teacher.absences.filter');

    // Route::get('/science', [scienceController::class, 'index'])->name('science');
    Route::resource('science', scienceController::class);

    Route::post('science/storeStudy', [scienceController::class, 'storeStudy'])->name('science.storeStudy');

    Route::resource('absenceteacher', teacherabsencefilterController::class);



    Route::get('/teacher/absence', [teacherabsencefilterController::class, 'search'])->name('teacher.absence.search');
});

// Route::middleware(['auth.redirect'])->group(function () {
//     Route::get('/', function () {
//         return view('auth.login');
//     });
// });

// Route::fallback(function () {
//     abort(404);
// });
require __DIR__ . '/auth.php';
