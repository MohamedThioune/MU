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
    // $id = Auth::id();
    $videos = DB::Table('videos')->select('*')
                                // ->join('videos', 'users.id', 'videos.user_id')
                                // ->where('users.id', $id)
                                ->get();
    session(['videos' => $videos]);
    return view('home');
});

Route::get('vids/uploads/^[a-zA-Z0-9_]*$');

Route::get('vids/thumbnails/^[a-zA-Z0-9_]*$');

// play page : Play the current video [Online]
Route::get('/play', function () {
    return view('play');
});
Route::get('/play/{n}', [App\Http\Controllers\HomeController::class, 'play'])->name('play');

// home page : list all videos [Online]
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'choose'])->name('choose');

Route::get('/choose', [App\Http\Controllers\ProfileController::class, 'choose'])->name('choose')->middleware('auth');

Route::get('/connected/{n}', [App\Http\Controllers\HomeController::class, 'connected'])->where('n','[0-9]+')->name('connected')->middleware('auth');

Auth::routes();

Route::resource('users', 'UserController')->middleware('auth');

Route::resource('profiles', 'ProfileController')->middleware('auth');

Route::resource('channels', 'channelController');

Route::resource('categorySecondaries', 'CategorySecondaryController');

Route::resource('categoryPrimaries', 'CategoryPrimaryController');

Route::resource('subTopics', 'SubTopicController');

Route::resource('mainTopics', 'MainTopicController');

Route::resource('videos', 'VideoController');

Route::resource('reports', 'ReportController');

Route::resource('shares', 'ShareController');

Route::resource('reads', 'ReadController');