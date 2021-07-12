<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\VideoAPIController;


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
Route::get('videos_categories', [VideoAPIController::class, 'videos_categories'])->name('videos.categories');
