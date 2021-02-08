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

Route::get('/', [App\Http\Controllers\KosmonautController::class, 'index']);
Route::get('/add_kosmonaut', [App\Http\Controllers\KosmonautController::class, 'create']);
Route::get('/edit_kosmonaut/{kosmonaut}', [App\Http\Controllers\KosmonautController::class, 'edit']);
Route::get('/delete/{kosmonaut}', [App\Http\Controllers\KosmonautController::class, 'delete']);
Route::patch('/', [App\Http\Controllers\KosmonautController::class, 'update']);
Route::post('/', [App\Http\Controllers\KosmonautController::class, 'store']);
