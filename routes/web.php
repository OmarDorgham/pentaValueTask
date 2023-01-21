<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MobileAuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UploadImage;
use Illuminate\Support\Facades\Route;


Route::get('/', function (){
    return view('welcome');
});


// FrontEnd Task
Route::get('/mobile-auth', [MobileAuthController::class, 'index']);

Route::get('/upload-image-index', [UploadImage::class, 'index']);
Route::post('/upload-image', [UploadImage::class, 'upload'])->name('upload.image');

// Hierarchical Task
Route::get('/categories', [CategoryController::class, 'index']);


// Queries Task
Route::get('/accounts', [AccountController::class, 'index'])->name('account.index');
Route::get('/account/create', [AccountController::class, 'create'])->name('account.create');
Route::post('/account/store', [AccountController::class, 'store'])->name('account.store');


Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');


Route::get('/jobs', [JobController::class, 'index'])->name('job.index');
Route::get('/job/create', [JobController::class, 'create'])->name('job.create');
Route::post('/job/store', [JobController::class, 'store'])->name('job.store');

Route::get('/tasks', [TaskController::class, 'index'])->name('task.index');
Route::get('/task-where', [TaskController::class, 'taskWhere'])->name('task.where');
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
