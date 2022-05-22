<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/**
 * default page index..
 */
Route::get('/', 'App\Http\Controllers\PagesController@index');
/**
 * about page..
 */
Route::get('/about', 'App\Http\Controllers\PagesController@about');

/**
 * authentication routes..
 */
Auth::routes();
// home/dashboard
/* Route::get('/home', 'App\Http\Controllers\HomeController@index') */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
