<?php

use App\GalleryCategory;
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

Route::prefix('administrator')->namespace('Admin')->middleware(['auth','web'])->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.index');
    Route::get('/setting', 'HomeController@setting')->name('admin.setting');

    Route::resource('anggota', 'AnggotaController');
    Route::resource('kegiatan', 'KegiatanController');
    Route::resource('kehadiran', 'KehadiranController');
    Route::resource('carousel', 'CarouselController');
    Route::resource('gallery', 'GalleryController');
    Route::get('/gallery/category/{id}', 'GalleryController@category')->name('gallery.category');


    Route::resource('post', 'PostController');
    Route::resource('gallery_category', 'GalleryCategoryController');
    
});


