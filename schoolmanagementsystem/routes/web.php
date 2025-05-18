<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index']);

Route::prefix('teachers')->group(function () {
    Route::get('/', [StudentController::class, 'studentDashboard'])->name('students.dashboard');
    Route::get('/list', [StudentController::class, 'studentList'])->name('students.index');
    Route::get('/create', [StudentController::class, 'createStudent'])->name('students.create');
    Route::post('/create', [StudentController::class, 'storeStudent'])->name('students.store');
    Route::get('/edit/{id}', [StudentController::class, 'editStudent'])->name('students.edit');
    Route::post('/edit/{id}', [StudentController::class, 'updateStudent']);
    Route::get('/delete/{id}', [StudentController::class, 'deleteStudent'])->name('students.delete');

    Route::get('{id}/report', [StudentController::class, 'reportCard'])->name('students.report');
    Route::post('/mark', [StudentController::class, 'storeMark']);
    Route::post('/mark/{id}', [StudentController::class, 'updateMark']);
    Route::get('/mark/delete/{id}', [StudentController::class, 'deleteMark'])->name('students.markDelete');

    Route::get('/grade', [StudentController::class, 'gradeList'])->name('grade');
});


Route::prefix('/admin')->group(function () {
    Route::get('/', [TeacherController::class, 'dashboard'])->name('teachers.dashboard');
    Route::get('/list', [TeacherController::class, 'teacherList'])->name('teachers.index');
    Route::get('/create', [TeacherController::class, 'createTeacher'])->name('teachers.create');
    Route::post('/create', [TeacherController::class, 'storeTeacher'])->name('teachers.store');
    Route::get('/edit/{id}', [TeacherController::class, 'editTeacher'])->name('teachers.edit');
    Route::post('/edit/{id}', [TeacherController::class, 'updateTeacher']);
    Route::get('/delete/{id}', [TeacherController::class, 'deleteTeacher'])->name('teachers.delete');

    // grade 
    Route::get('/grade', [TeacherController::class, 'gradeList'])->name('teachers.grade');
    Route::post('/grade', [TeacherController::class, 'storeGrade'])->name('teachers.storeGrade');
    Route::post('/grade/{id}', [TeacherController::class, 'updateGrade']);
    Route::get('/delete/grade/{id}', [TeacherController::class, 'deleteGrade'])->name('teachers.deleteGrade');

    //subject for major
    Route::post('/subject-major', [TeacherController::class, 'storeSubject']);
    Route::post('/subject-major/{id}', [TeacherController::class, 'updateSubject']);
    Route::get('/subject-major/{id}', [TeacherController::class, 'deleteMajorSubject'])->name('teachers.deleteMajorSubject');

    //subject for minor
    Route::post('/subject-minor', [TeacherController::class, 'storeSubject']);
    Route::post('/subject-minor/{id}', [TeacherController::class, 'updateSubject']);
    Route::get('/subject-minor/{id}', [TeacherController::class, 'deleteMinorSubject'])->name('teachers.deleteMinorSubject');

    //position
    Route::post('/position', [TeacherController::class, 'storePosition'])->name('teachers.storePosition');
    Route::post('/position/{id}', [TeacherController::class, 'updatePosition']);
    Route::get('/delete/position/{id}', [TeacherController::class, 'deletePosition'])->name('teachers.deletePosition');
});


// Shared routes (accessible by both roles)
// Route::middleware(['auth', 'role:admin|teacher'])->group(function () {
//     Route::get('/list', [TeacherController::class, 'teacherList'])->name('teachers.index');
// });

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
