<?php

use App\Http\Controllers\JqueryController;
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

Route::get('/', [JqueryController::class, 'index']);
Route::get('/create', [JqueryController::class, 'create']);
Route::get('/store', [JqueryController::class, 'store']);
Route::get('/show', [JqueryController::class, 'show']);
