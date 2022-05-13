<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\ExhibitionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlumniController;
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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Auth::routes();

Route::get('/dashboard', [PagesController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/cms_profile', [PagesController::class, 'profile'])->middleware('auth')->name('cms_profile');
Route::get('/cms_artwork', [PagesController::class, 'artwork'])->middleware('auth')->name('cms_artwork');
Route::get('/cms_photography', [PagesController::class, 'photography'])->middleware('auth')->name('cms_photography');
Route::get('/cms_videoart', [PagesController::class, 'videoart'])->middleware('auth')->name('cms_videoart');
Route::get('/cms_preview', [PagesController::class, 'preview'])->middleware('auth')->name('cms_preview');

Route::get('/edit_profile/{id}', [UserController::class, 'edit'])->middleware('auth')->name('edit_profile');
Route::post('/update_profile/{id}', [UserController::class, 'update'])->middleware('auth')->name('update_profile');

Route::get('/add_alumni', [AlumniController::class, 'create'])->middleware('auth')->name('add_alumni');
Route::post('/store_alumni', [AlumniController::class, 'store'])->middleware('auth')->name('store_alumni');
Route::get('/edit_alumni/{id}', [AlumniController::class, 'edit'])->middleware('auth')->name('edit_alumni');
Route::post('/update_alumni/{id}', [AlumniController::class, 'update'])->middleware('auth')->name('update_alumni');
Route::post('/delete_alumni/{id}', [AlumniController::class, 'destroy'])->middleware('auth')->name('delete_alumni');

Route::get('/add_artwork', [ArtworkController::class, 'create'])->middleware('auth')->name('add_artwork');
Route::post('/store_artwork', [ArtworkController::class, 'store'])->middleware('auth')->name('store_artwork');
Route::get('/edit_artwork/{id}', [ArtworkController::class, 'edit'])->middleware('auth')->name('edit_artwork');
Route::post('/update_artwork/{id}', [ArtworkController::class, 'update'])->middleware('auth')->name('update_artwork');
Route::post('/delete_artwork/{id}', [ArtworkController::class, 'destroy'])->middleware('auth')->name('delete_artwork');

Route::get('/add_photo', [PhotographyController::class, 'create'])->middleware('auth')->name('add_photo');
Route::post('/store_photo', [PhotographyController::class, 'store'])->middleware('auth')->name('store_photo');
Route::get('/edit_photo/{id}', [PhotographyController::class, 'edit'])->middleware('auth')->name('edit_photo');
Route::post('/update_photo/{id}', [PhotographyController::class, 'update'])->middleware('auth')->name('update_photo');
Route::post('/delete_photo/{id}', [PhotographyController::class, 'destroy'])->middleware('auth')->name('delete_photo');

Route::get('/add_exhibition', [ExhibitionController::class, 'create'])->middleware('auth')->name('add_exhibition');
Route::post('/store_exhibition', [ExhibitionController::class, 'store'])->middleware('auth')->name('store_exhibition');
Route::get('/edit_exhibition/{id}', [ExhibitionController::class, 'edit'])->middleware('auth')->name('edit_exhibition');
Route::post('/update_exhibition/{id}', [ExhibitionController::class, 'update'])->middleware('auth')->name('update_exhibition');
Route::post('/delete_exhibition/{id}', [ExhibitionController::class, 'destroy'])->middleware('auth')->name('delete_exhibition');

Route::get('/add_videoart', [VideoartController::class, 'create'])->middleware('auth')->name('add_video');
Route::post('/store_videoart', [VideoartController::class, 'store'])->middleware('auth')->name('store_video');
Route::get('/edit_videoart/{id}', [VideoartController::class, 'edit'])->middleware('auth')->name('edit_video');
Route::post('/update_videoart/{id}', [VideoartController::class, 'update'])->middleware('auth')->name('update_video');
Route::post('/delete_videoart/{id}', [VideoartController::class, 'destroy'])->middleware('auth')->name('delete_video');
