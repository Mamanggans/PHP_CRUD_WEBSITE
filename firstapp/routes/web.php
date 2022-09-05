<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\ProfileController;
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

Route::get('/', [Controller::class, 'read']);
// Route::get('/create', [Controller::class, 'create']);  
Route::get('/newData', [Controller::class, 'newData']);
Route::post('/create', [Controller::class, 'create']);
Route::get('/update/{id}', [Controller::class, 'update']);
Route::post('/updateData', [Controller::class, 'updateData']);
Route::get('/delete/{id}',[Controller::class,'delete']);


