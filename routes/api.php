<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\VideoAPIController;
use App\Http\Controllers\API\CommentAPIController;


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
