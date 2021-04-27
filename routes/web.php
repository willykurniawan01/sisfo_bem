<?php

use App\GalleryCategory;
use Faker\Guesser\Name;
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
    Route::get('/berita', 'BlogController@index')->name('blog');
    Route::get('/berita/category/{id}', 'BlogController@category')->name('blog.category');
    Route::get('/berita/post/{post}', 'BlogController@detail')->name('blog.detail');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/demisioner', 'DemisionerController@index')->name('demisioner');
    Route::get('/anggota','AnggotaController@index')->name('anggota');
    Route::get('/anggota/{nim}', 'AnggotaController@detail')->name('anggota.detail');
    Route::get('/page/{nama}', 'PagesController@index')->name('page');
    
});

Auth::routes();

Route::prefix('admin')->namespace('Admin')->middleware(['auth','web'])->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.index');

    Route::get('/s', 'SettingController@index')->name('setting.index');
    
    Route::get('/s/socialmedia', 'SettingController@socialmedia')->name('setting.socialmedia');
    Route::post('/s/socialmedia/update', 'SettingController@socialmedia_update')->name('setting.socialmedia.update');

    Route::get('/s/alamat', 'SettingController@alamat')->name('setting.alamat');
    Route::post('/s/alamat/update', 'SettingController@alamat_update')->name('setting.alamat.update');

    Route::get('/s/p/about', 'SettingController@about')->name('setting.about');
    Route::post('/s/p/about/update', 'SettingController@about_update')->name('setting.about.update');
    
    Route::get('/s/p/blog', 'SettingController@blog')->name('setting.blog');
    Route::post('/s/p/blog/update', 'SettingController@blog_update')->name('setting.blog.update');
    
    Route::get('/s/p/gallery', 'SettingController@gallery')->name('setting.gallery');
    Route::post('/s/p/gallery/update', 'SettingController@gallery_update')->name('setting.gallery.update');


    Route::get('/s/p/home', 'SettingController@home')->name('setting.home');
    Route::post('/s/p/home/update', 'SettingController@home_update')->name('setting.home.update');

    Route::get('/s/akun', 'SettingController@akun')->name('setting.akun');
    Route::get('/s/gantipassword', 'SettingController@gantipassword')->name('setting.gantipassword');

    Route::post('/s/updatepassword/{id}', 'SettingController@updatepassword')->name('setting.updatepassword');


    

    Route::resource('anggota', 'AnggotaController');
    Route::resource('kegiatan', 'KegiatanController');
    Route::resource('kehadiran', 'KehadiranController');
    Route::resource('carousel', 'CarouselController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('page', 'PagesController');
    Route::get('/gallery/category/{id}', 'GalleryController@category')->name('gallery.category');


    Route::resource('post', 'PostController');
    
    Route::resource('post_category', 'PostCategoryController');
    
    Route::resource('gallery_category', 'GalleryCategoryController');
    
    
});


