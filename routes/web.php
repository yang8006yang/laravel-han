<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProvisionServer;

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

// 自訂放上面、resoure放下面(有衝突會留下自訂);
Route::get('/students/excel', [StudentController::class, 'excel'])->name("student.excel");
Route::get('/students/child', [StudentController::class, 'childPage'])->name("student.child");
Route::resource('students', StudentController::class);


Route::get('/f1', [HotelController::class, 'f1'])->name("hotels1");
Route::get('/f2', [HotelController::class, 'f2'])->name("hotels2");
Route::get('/f3', [HotelController::class, 'f3'])->name("hotels3");
Route::get('/server', ProvisionServer::class);