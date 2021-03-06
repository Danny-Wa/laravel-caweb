<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class, 'index']);

Route::get('/task/{id}', [TaskController::class, 'show']);

Route::get('/task/{id}/delete', [TaskController::class, 'delete']);

//Second version of the index, ordered alphabetically
Route::get('/index2', [TaskController::class, 'index2']);