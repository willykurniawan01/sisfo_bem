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

Route::namespace('Home')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/gallery', 'GalleryController@index')->name('gallery');
    Route::get('/blog', 'BlogController@index')->name('blog');
    Route::get('/blog/category/{category}', 'BlogController@category')->name('blog.category');
    Route::get('/blog/post/{post}', 'BlogController@detail')->name('blog.detail');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/demisioner', 'HomeController@index')->name('demisioner');

});

Auth::routes();

Route::prefix('admin')->namespace('Admin')->middleware(['auth','web'])->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.index');

    Route::get('/s', 'SettingController@index')->name('setting.index');
    
    Route::get('/s/socialmedia', 'SettingController@socialmedia')->name('setting.socialmedia');
    Route::post('/s/socialmedia/update', 'SettingController@socialmedia_update')->name('setting.socialmedia.update');

    Route::get('/s/alamat', 'SettingController@alamat')->name('setting.alamat');
    Route::post('/s/alamat/update', 'SettingController@alamat_update')->name('setting.alamat.update');

    Route::get('/s/story', 'SettingController@story')->name('setting.story');
    Route::post('/s/story/update', 'SettingController@story_update')->name('setting.story.update');

    Route::get('/s/parallax', 'SettingController@parallax')->name('setting.parallax');
    Route::post('/s/parallax/update', 'SettingController@parallax_update')->name('setting.parallax.update');

    Route::resource('anggota', 'AnggotaController');
    Route::resource('kegiatan', 'KegiatanController');
    Route::resource('kehadiran', 'KehadiranController');
    Route::resource('carousel', 'CarouselController');
    Route::resource('gallery', 'GalleryController');
    Route::get('/gallery/category/{id}', 'GalleryController@category')->name('gallery.category');


    Route::resource('post', 'PostController');
    Route::resource('post_category', 'PostCategoryController');
    
    Route::resource('gallery_category', 'GalleryCategoryController');
    
    
});


