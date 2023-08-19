<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/task-store',[TaskController::class,'store'])->name("task.store");
Route::get('/task-manage',[TaskController::class,'manage'])->name("task.manage");
Route::get('/task-edit/{id}',[TaskController::class,'edit'])->name("task.edit");
Route::post('/task-update/{id}',[TaskController::class,'update'])->name("task.update");
Route::get('/task-delete/{id}',[TaskController::class,'delete'])->name("task.delete");
