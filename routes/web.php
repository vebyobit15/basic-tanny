<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ServiceController;
use App\Models\Department;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $users=DB::table('users')->get();
    return view('dashboard',compact('users'));
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){

Route::get('/service/all',[ServiceController::class,'index'])->name('service');
Route::post('/service/add',[ServiceController::class,'store'])->name('addservice');
Route::get('/service/form',[ServiceController::class,'form'])->name('form');
Route::get('/service/edit/{id}',[ServiceController::class,'edit']);
Route::post('/service/update/{id}',[ServiceController::class,'update']);
Route::get('/service/delete/{id}',[ServiceController::class,'delete']);
Route::get('/service/print/{id}',[ServiceController::class,'print']);
Route::get('/searchAirport/search',[ServiceController::class,'search']);
Route::get('/searchAirport/search2',[ServiceController::class,'search2']);

Route::get('/creator',[ServiceController::class,'creator'])->name('creator');
});



// Route::get('/department/all',[DepartmentController::class,'index'])->name('department');
// Route::post('/department/add',[DepartmentController::class,'store'])->name('addDepartment');
// Route::get('/department/edit/{id}',[DepartmentController::class,'edit']);
// Route::post('/department/update/{id}',[DepartmentController::class,'update']);
// Route::get('/department/softdelete/{id}',[DepartmentController::class,'softdelete']);
// Route::get('/department/restore/{id}',[DepartmentController::class,'restore']);
// Route::get('/department/delete/{id}',[DepartmentController::class,'delete']);
