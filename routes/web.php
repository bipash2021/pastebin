<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware'=>'auth'],function(){




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('staff')->group(function(){

Route::get('/view', [App\Http\Controllers\StaffController::class, 'view'])->name('staff.view');
Route::get('/add', [App\Http\Controllers\StaffController::class, 'add'])->name('staff.add');
Route::post('/store', [App\Http\Controllers\StaffController::class, 'store'])->name('staff.store');
Route::get('/edit/{id}', [App\Http\Controllers\StaffController::class, 'edit'])->name('staff.edit');
Route::post('/update/{id}', [App\Http\Controllers\StaffController::class, 'update'])->name('staff.update');
Route::get('/delete/{id}', [App\Http\Controllers\StaffController::class, 'delete'])->name('staff.delete');

});


Route::prefix('student')->group(function(){

Route::get('/view', [App\Http\Controllers\StudentController::class, 'view'])->name('student.view');
Route::get('/add', [App\Http\Controllers\StudentController::class, 'add'])->name('student.add');
Route::post('/store', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::get('/edit/{id}', [App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit');
Route::post('/update/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('student.update');
Route::get('/delete/{id}', [App\Http\Controllers\StudentController::class, 'delete'])->name('student.delete');

});

});




