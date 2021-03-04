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

    $subtopics = DB::Table('sub_topics')->select('*')
                                        ->get();

    $signals = DB::Table('reports')->select('*')
                               ->where('reports.user_id', Auth::id()) 
                               ->get();

    $videos_haltcare = DB::Table('videos')->select('videos.*')
                                 ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
                                 ->where('mainTopic_id', 1)
                                 ->get();

    $videos_life = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->where('mainTopic_id', 2)
    ->get();

    $videos_health = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->where('mainTopic_id', 3)
    ->get();


    $videos_business = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->where('mainTopic_id', 4)
    ->get();

    $videos_environnement = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->where('mainTopic_id', 5)
    ->get();

    $videos_education = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->where('mainTopic_id', 6)
    ->get();

    
    session(['videos_haltcare' => $videos_haltcare, 'videos_life' => $videos_life, 'videos_health' => $videos_health, 'videos_business' => $videos_business, 'videos_environnement' => $videos_environnement, 'videos_education' => $videos_education]);

    return view('home', compact('subtopics'));
});

Route::get('/comment', [App\Http\Controllers\CommentController::class, 'contribute'])->name('comments.contribute');
Route::get('/response_comment', [App\Http\Controllers\ResponseCommentController::class, 'contribute'])->name('responsecomments.contribute');
Route::get('vids/uploads/^[a-zA-Z0-9_]*$');

Route::get('vids/thumbnails/^[a-zA-Z0-9_]*$');

// play page : Play the current video [Online]
Route::get('/play', function () {
    
    return view('play');
})->name('playing');

Route::get('/play/{n}', [App\Http\Controllers\HomeController::class, 'play'])->where('n','[0-9]+')->name('play');

// home page : list all videos [Online]
Route::get('/choose', [App\Http\Controllers\ProfileController::class, 'choose'])->name('choose')->middleware('auth');

//link to report 
Route::get('/report/{n}', [App\Http\Controllers\ReportController::class, 'report'])->where('n','[0-9]+')->name('report')->middleware('auth');

//link to profile
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
Route::get('likevideo/{video_id}','VideoController@likeVideo')->name('likevideo');
Route::get('dislikevideo/{video_id}','VideoController@dislikeVideo')->name('dislikevideo');


Route::resource('reports', 'ReportController');

Route::resource('shares', 'ShareController');

Route::resource('reads', 'ReadController');

Route::resource('comments', 'CommentController');

Route::resource('responseComments', 'ResponseCommentController');
