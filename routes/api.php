<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')->group(function () {
    Route::post('/login', 'AuthController@Login');
    Route::post('/register', 'AuthController@Register');
});

Route::middleware('auth:sanctum')->namespace('Api')->group(function () {   
    Route::resource('anggota', 'AnggotaController');
    Route::resource('kehadiran', 'KehadiranController');
    Route::resource('kegiatan', 'KegiatanController');
});