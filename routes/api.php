<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\VideoAPIController;
use App\Http\Controllers\API\CommentAPIController;
use App\Http\Controllers\API\PlaylistAPIController;
use App\Http\Controllers\API\MonthAPIController;
use App\Http\Controllers\API\UserAPIController;



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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('videos', 'VideoAPIController');
Route::get('videos_categories/{n}', [VideoAPIController::class, 'videos_categories'])->where('n','[0-1]')->name('videos.categories');


Route::resource('subtopics', 'SubtopicAPIController');

Route::resource('comments', 'CommentAPIController');

Route::get('comments/videos/{n}', [CommentAPIController::class, 'comments'])->name('comments.videos');
Route::get('comments/response/{n}', [CommentAPIController::class, 'response_comments'])->name('comment.responses');
Route::get('comments/users/{n}', [CommentAPIController::class, 'users_comments'])->name('comment.users');

Route::resource('playlists', 'PlaylistAPIController');
Route::get('playlists/users/{n}', [PlaylistAPIController::class, 'users'])->name('playlist.users');

Route::get('time/month/{n}', [MonthAPIController::class, 'month'])->name('time.month');
Route::get('time/hijri/{n}', [MonthAPIController::class, 'gregorianToHijri'])->name('time.gregorianToHijri');
Route::get('time/toHijri', [MonthAPIController::class, 'todayToHijri'])->name('time.todayToHijri');
Route::get('time/bar_topic/{n}', [MonthAPIController::class, 'barTopic'])->name('time.barTopic');


Route::resource('users', 'UserAPIController');

Route::post('auth_signin', [UserAPIController::class, 'auth_signin'])->name('auth.signin');
Route::get('users/{id}/{token}', [UserAPIController::class, 'shows'])->name('auth.showoff');
Route::get('auth_logout/{token}', [UserAPIController::class, 'auth_logout'])->name('auth.logout');

