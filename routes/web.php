<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessenceController;
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
Route::get('/createuser', [UserController::class,'create']) /*->middleware(['is_admin','auth'])*/;
Route::post('/storeUser', [UserController::class,'store'])->name('storeUser') /*->middleware(['is_admin','auth'])*/;

Route::get('/login', [UserController::class,'login'])->name('login');
Route::post('/cheak', [UserController::class,'cheak'])->name('cheak'); /*->middleware(['is_admin','auth'])*/;
Route::get('/addCourse', [CourseController::class,'create'])->name('addCourse'); /*->middleware(['is_admin','auth'])*/;
Route::post('/storecourse', [CourseController::class,'store'])->name('storecourse'); /*->middleware(['is_admin','auth'])*/;
Route::get('/createless', [LessenceController::class,'create'])->name('createless'); /*->middleware(['is_admin','auth'])*/;
Route::post('/storeless', [LessenceController::class,'store'])->name('storeless'); /*->middleware(['is_admin','auth'])*/;
