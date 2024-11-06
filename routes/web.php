<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\RecordController;

Route::get('/', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'authtenticate']);
Route::get('/logout', [AuthController::class, 'logout']);




Route::middleware(['admin'])->group(function () {
    Route::get('/admin', function () {
        return  view('adminPage.admin');
    });
    Route::get('/exporth', [ExportController::class, 'export_excel']);
    Route::get('/students/upload', [StudentController::class, 'upload']);
    Route::post('/students/import', [StudentController::class, 'import']);
    Route::resource('/students', StudentController::class);
    Route::resource('/teachers', TeacherController::class);
    Route::resource('/classes', ClassController::class);
    Route::resource('/subjects', SubjectController::class);
});

Route::middleware(['teacher'])->group(function () {
    Route::resource('/attendances',  AttendanceController::class);
});

Route::resource('/record',  RecordController::class);
Route::resource('/home', HomeController::class, ['except' => 'create', 'except' => 'store'])->middleware('auth');
Route::get('/home/create/{attendances_record}', [HomeController::class, 'create']);
Route::post('/home/store/{attendances_record}', [HomeController::class, 'store']);
