<?php

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
    return view('home');
});

Route::get('/choose', [App\Http\Controllers\ProfileController::class, 'choose'])->name('choose')->middleware('auth');

Route::get('/connected/{n}', [App\Http\Controllers\HomeController::class, 'connected'])->where('n','[0-9]+')->name('connected')->middleware('auth');

Auth::routes();

Route::resource('users', 'UserController')->middleware('auth');

Route::resource('profiles', 'ProfileController')->middleware('auth');

Route::resource('channels', 'channelController');

Route::resource('categorySecondaries', 'CategorySecondaryController');

Route::resource('categoryPrimaries', 'CategoryPrimaryController');