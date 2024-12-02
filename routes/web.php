<?php

use App\Http\Controllers\UsersController;
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

Route::get('/add', function () {
    return view('add');
});


Route::post('/add' ,[UsersController::class , 'add'] )->name('user.add');
Route::get('/index' , [UsersController::class , 'index'])->name('user.index');
Route::get('/view/{id}' , [UsersController::class , 'view'])->name('user.view');
Route::get('/edit/{id}' , [UsersController::class , 'edit'])->name('user.edit');
Route::put('/update/{id}' , [UsersController::class , 'update'])->name('user.update');
Route::delete('/delete/{id}' , [UsersController::class , 'delete'])->name('user.delete');
