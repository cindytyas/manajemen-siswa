<?php

use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\SchoolFeeContoller;
use App\Http\Controllers\SubjectContoller;
use App\Models\Classroom;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    Route::resource('guru', TeacherController::class);
    Route::resource('jurusan', MajorController::class);
    Route::resource('kelas', ClassroomController::class);
    Route::resource('siswa', StudentController::class);
    Route::resource('mapel', SubjectContoller::class);
    Route::get('mapel/filter/kelompok', [SubjectContoller::class, 'filter'])->name('mapel.filter');

    Route::resource('ortu', ParentController::class);
    Route::get('siswa/{id}/orang-tua', [ParentController::class, 'orang_tua'])->name('orang-tua.index');
    Route::get('siswa/{id}/orang-tua/create', [ParentController::class, 'create'])->name('orang-tua.create');
    Route::get('siswa/{id}/orang-tua/{id_ortu}/edit', [ParentController::class, 'edit'])->name('orang-tua.edit');

    Route::resource('spp', SchoolFeeContoller::class);
});

