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
    
    $video = DB::Table('videos')->select('videos.*')
                                 ->whereNull('videos.deleted_at')
                                 ->orderByDesc('videos.created_at')
                                 ->first();
    
    $last = DB::table('videos', 'views')
    ->join('reads', 'videos.id', 'reads.video_id') 
    ->whereNull('videos.deleted_at')            
    ->select(DB::raw('count(*) as views, reads.video_id'))
    ->groupBy('reads.video_id')
    ->orderByDesc('views')
    ->limit(3)
    ->get(); 
    
    $vimeo = App\Models\Video::find($last[0]->video_id);

    $channel_top = DB::Table('users')->select('channels.*')
                                        ->join('channels', 'users.id', 'channels.user_id')
                                        ->where('channels.user_id', $vimeo->user_id)
                                        ->first();

    $videos_count = DB::Table('videos')->select('videos.*')
    ->join('users','users.id','videos.user_id')
    ->where('videos.user_id', $channel_top->user_id)
    ->whereNull('videos.deleted_at')
    ->count();

    $start =  (new \Datetime())->format('Y-m-01 H:i:s');
    $end =   (new \Datetime())->format('Y-m-30 H:i:s');

    $look_videos = DB::table('reads')
    ->join('videos','videos.id','reads.video_id')
    ->where('reads.user_id',Auth::id())
    ->whereNull('videos.deleted_at')
    ->where('reads.created_at', '>=', $start)
    ->where('reads.created_at', '<', $end)
    ->select(DB::raw('count(*) as views, reads.video_id'))
    ->groupBy('reads.video_id')
    ->get();


    $like_videos = DB::table('likes')
    ->where('likeable_type','App\Models\Video')
    ->where('likes.user_id', Auth::id())
    ->where('likes.created_at', '>=', $start)
    ->where('likes.created_at', '<', $end)
    ->select(DB::raw('count(*) as likes, likes.user_id'))
    ->groupBy('likes.user_id')
    ->first(); 

    $follows = DB::table('abonne_channel')
    ->where('abonne_channel.user_id', Auth::id())
    ->where('abonne_channel.created_at', '>=', $start)
    ->where('abonne_channel.created_at', '<', $end)
    ->select(DB::raw('count(*) as trends, abonne_channel.user_id'))
    ->groupBy('abonne_channel.user_id')
    ->first(); 

    $looks = DB::table('videos')
    ->join('reads','videos.id','reads.video_id')
    ->where('reads.user_id', Auth::id())
    ->where('reads.created_at', '>=', $start)
    ->where('reads.created_at', '<', $end)
    ->whereNull('videos.deleted_at')
    ->count();


    $shahid = strtotime('i:s');

    foreach($look_videos as $look){
        $video = App\Models\Video::find($look->video_id);
        if($video->duration){
            $duration = strtotime($video->duration);
            $shahid += $duration;
        }
    };

    $shahid = date('H:i:s', $shahid);
    
    /** @var Event $event */
    $events = DB::Table('events')->select('events.*')
                                   ->limit(3)
                                   ->get();
    
    $channel = DB::Table('users')->select('channels.*')
    ->join('channels', 'users.id', 'channels.user_id')
    ->where('users.id', Auth::id())
    ->first();
    
    $subtopics = DB::Table('sub_topics')->select('*')
                                        ->get();

    $signals = DB::Table('reports')->select('*')
                               ->where('reports.user_id', Auth::id())
                               ->get();

    $videos_haltcare = DB::Table('videos')->select('videos.*')
                                 ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
                                 ->where('mainTopic_id', 1)
                                 ->whereNull('videos.deleted_at')
                                 ->get();

    $videos_life = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->where('mainTopic_id', 2)
    ->whereNull('videos.deleted_at')
    ->get();

    $videos_health = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->where('mainTopic_id', 3)
    ->whereNull('videos.deleted_at')
    ->get();


    $videos_business = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->where('mainTopic_id', 4)
    ->whereNull('videos.deleted_at')
    ->get();

    $videos_environnement = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->where('mainTopic_id', 5)
    ->whereNull('videos.deleted_at')
    ->get();

    $videos_education = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->where('mainTopic_id', 6)
    ->whereNull('videos.deleted_at')
    ->get();


    session(['videos_haltcare' => $videos_haltcare, 'videos_life' => $videos_life, 'videos_health' => $videos_health, 'videos_business' => $videos_business, 'videos_environnement' => $videos_environnement, 'videos_education' => $videos_education]);

    return view('home', compact('subtopics','channel','events', 'video','last','channel_top','videos_count','look_videos','like_videos','follows', 'looks','shahid'));

})->name('home');

Route::get('vids/uploads/^[a-zA-Z0-9_]*$');

Route::get('vids/thumbnails/^[a-zA-Z0-9_]*$');

// delete in selection : Videos for user
Route::post('/delete/videos', [App\Http\Controllers\VideoController::class, 'deletes'])->name('deletes.videos')->middleware('auth');

// play page : Play the current video [Online]
Route::get('/play', function () {

    return view('play');
})->name('playing');

Route::get('/play/{n}', [App\Http\Controllers\HomeController::class, 'play'])->where('n','[0-9]+')->name('play');

// home page : list all videos [Online]
Route::get('/choose', [App\Http\Controllers\ProfileController::class, 'choose'])->name('choose')->middleware('auth');

// link to report
Route::get('/report/{n}', [App\Http\Controllers\ReportController::class, 'report'])->where('n','[0-9]+')->name('report')->middleware('auth');

// link to profile
Route::get('/connected/{n}', [App\Http\Controllers\HomeController::class, 'connected'])->where('n','[0-9]+')->name('connected')->middleware('auth');

// channel page : mode visiteur
Route::get('/chaine_visiteur/{n}', [App\Http\Controllers\ChannelController::class, 'visit'])->where('n','[0-9]+')->name('channel.visitor')->middleware('auth');

// channel page : apercu
Route::get('/apercu/{n}', [App\Http\Controllers\ChannelController::class, 'overview'])->where('n','[0-9]+')->name('channel.fly')->middleware('auth');


Auth::routes();

Route::resource('users', 'UserController')->middleware('auth');
Route::get('suscribe/{channel_id}','UserController@suscribe')->name('suscribe');

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
Route::get('comment/likecomment/{comment_id}','CommentController@likeComment')->name('likecomment');
Route::get('comment/dislikecomment/{comment_id}','CommentController@dislikeComment')->name('dislikecomment');

Route::resource('responseComments', 'ResponseCommentController');


Route::resource('events', 'EventController');

Route::resource('activities', 'ActivityController');

Route::resource('contacts', 'ContactController');

Route::resource('products', 'productController');