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


    $shahid = null;

    foreach($look_videos as $look){
        $video = App\Models\Video::find($look->video_id);
        if($video->duration){
            $duration = strtotime($video->duration);
            $shahid += $duration;
        }
    };

    $shahid = date('H:i:s', $shahid);

    /** @var Event $event */
    $event = DB::Table('events')->select('events.*')
                                   ->first();

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

    $playlists = DB::Table('playlists')->select('videos.*')
    ->join('videos', 'videos.id', 'playlists.video_id')
    ->whereNull('playlists.deleted_at')
    ->where('playlists.user_id', Auth::id())
    ->get();

    session(['videos_haltcare' => $videos_haltcare, 'videos_life' => $videos_life, 'videos_health' => $videos_health, 'videos_business' => $videos_business, 'videos_environnement' => $videos_environnement, 'videos_education' => $videos_education]);

    return view('home', compact('subtopics','channel','event', 'video','last','channel_top','videos_count','look_videos','like_videos','follows', 'looks','shahid','playlists'));

})->name('home')->middleware('auth');

Route::get('vids/uploads/^[a-zA-Z0-9_]*$');

Route::get('vids/thumbnails/^[a-zA-Z0-9_]*$');

// delete in selection : Videos for user
Route::post('/delete/videos', [App\Http\Controllers\VideoController::class, 'deletes'])->name('deletes.videos')->middleware('auth');

// play page : Play the current video [Online]
Route::get('/play', function () {

    return view('play');
})->name('playing')->middleware('auth');

Route::get('/play/{n}', [App\Http\Controllers\HomeController::class, 'play'])->where('n','[0-9]+')->name('play')->middleware('auth');

// share page : Play the current video shared [Online]
Route::get('/share/{n}', function($id){

    /*
        *
    */

    /*
        * Retrieve all videos shared $shared
    */

    /*
    * Test if this video.id is already shared by check in table of videos shared

    if($condition is true  ){

    */

    //State lecture of a video today
    $state = false;

    $video = App\Models\Video::find($id);
    $user = App\User::find($video->user_id);
    $users = array();

    $subtopics = App\Models\SubTopic::all();

    $reads = DB::Table('reads')
    ->where('video_id', $id)
    ->count();

    $comments = DB::Table('comments')->select('comments.user_id','comments.value' ,'comments.id as comment_id' ,'comments.created_at')
    ->where('comments.video_id', $id)
    ->orderBy('comments.created_at', 'desc')
    ->get();

    foreach($comments as $comment){
        $auth =  App\User::find($comment->user_id);
        array_push($users, $auth);
    };

    $counts = count($comments);

    /*
    * Time shahid and Progress bar
    */

    $start =  (new \Datetime())->format('Y-m-01 H:i:s');
    $end =   (new \Datetime())->format('Y-m-30 H:i:s');

    $look_videos = null;

    $shahid = strtotime('i:s');

    $shahid = date('H:i:s', $shahid);

    $looks = null;

    /*
    * All videos by main_topic
    */

    $videos_haltcare = DB::Table('videos')->select('videos.*')
                            ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
                            ->join('users','users.id','videos.user_id')
                            ->where('mainTopic_id', 1)
                            ->whereNull('videos.deleted_at')
                            ->get();

    $videos_life = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->join('users','users.id','videos.user_id')
    ->where('mainTopic_id', 2)
    ->whereNull('videos.deleted_at')
    ->get();

    $videos_health = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->join('users','users.id','videos.user_id')
    ->where('mainTopic_id', 3)
    ->whereNull('videos.deleted_at')
    ->get();


    $videos_business = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->join('users','users.id','videos.user_id')
    ->where('mainTopic_id', 4)
    ->whereNull('videos.deleted_at')
    ->get();

    $videos_environnement = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->join('users','users.id','videos.user_id')
    ->where('mainTopic_id', 5)
    ->whereNull('videos.deleted_at')
    ->get();

    $videos_education = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->join('users','users.id','videos.user_id')
    ->where('mainTopic_id', 6)
    ->whereNull('videos.deleted_at')
    ->get();

    $inshaallah = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->where('mainTopic_id', 7)
    ->whereNull('videos.deleted_at')
    ->OrderByDesc('videos.created_at', )
    ->get();

    return view('play', compact('user', 'video', 'comments', 'counts', 'reads', 'users', 'subtopics','looks','shahid','inshaallah','videos_haltcare','videos_life','videos_health','videos_business','videos_environnement','videos_education'));

    /*
        * end condition videos.id is shared
    }
    */

        /*
        * end condition videos.id is shared
        * return view login

        else {
        return view('login');
    }
    */

})->where('n','[0-9]+')->name('share');

// home page : list all videos [Online]
Route::get('/choose', [App\Http\Controllers\ProfileController::class, 'choose'])->name('choose')->middleware('auth');

// link to report
Route::get('/report/{n}', [App\Http\Controllers\ReportController::class, 'report'])->where('n','[0-9]+')->name('report')->middleware('auth');

// link to profile
Route::get('/connected/{n}', [App\Http\Controllers\HomeController::class, 'connected'])->where('n','[0-9]+')->name('connected')->middleware('auth');

// channel page : mode visiteur
Route::get('/chaine_visiteur/{n}', ['middleware'=>'auth', 'uses'=>'channelController@visit'])->where('n','[0-9]+')->name('channel.visitor');

// channel page : apercu
Route::get('/apercu/{n}', ['middleware'=>'auth', 'uses'=>'channelController@overview'])->where('n','[0-9]+')->name('channel.fly');

// flow page : apercu
Route::get('/flow', function () {
    $subtopics = DB::Table('sub_topics')->select('*')
    ->get();
    $sistas = false;
    $channel = DB::Table('users')->select('channels.*')
    ->join('channels', 'users.id', 'channels.user_id')
    ->where('users.id', Auth::id())
    ->first();

    $videos_haltcare = DB::Table('videos')->select('videos.*')
                                 ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
                                 ->join('users','users.id','videos.user_id')
                                 ->where('mainTopic_id', 1)
                                 ->where('videos.sistas', 0)
                                 ->whereNull('videos.deleted_at')
                                 ->get();

    $videos_life = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->join('users','users.id','videos.user_id')
    ->where('mainTopic_id', 2)
    ->where('videos.sistas', 0)
    ->whereNull('videos.deleted_at')
    ->get();

    $videos_health = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->join('users','users.id','videos.user_id')
    ->where('mainTopic_id', 3)
    ->where('videos.sistas', 0)
    ->whereNull('videos.deleted_at')
    ->get();


    $videos_business = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->join('users','users.id','videos.user_id')
    ->where('mainTopic_id', 4)
    ->where('videos.sistas', 0)
    ->whereNull('videos.deleted_at')
    ->get();

    $videos_environnement = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->join('users','users.id','videos.user_id')
    ->where('mainTopic_id', 5)
    ->where('videos.sistas', 0)
    ->whereNull('videos.deleted_at')
    ->get();

    $videos_education = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->join('users','users.id','videos.user_id')
    ->where('mainTopic_id', 6)
    ->where('videos.sistas', 0)
    ->whereNull('videos.deleted_at')
    ->get();

    return view('flow',compact('subtopics','channel','videos_haltcare','videos_life','videos_health','videos_business','videos_environnement','videos_education'));

})->name('flow')->middleware('auth');

// kids page : apercu
Route::get('/sistas', function () {
    $subtopics = DB::Table('sub_topics')->select('*')
    ->get();

    $videos_haltcare = DB::Table('videos')->select('videos.*')
                                 ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
                                 ->join('users','users.id','videos.user_id')
                                 ->where('users.age','<',15)
                                 ->where('videos.sistas', 1)
                                 ->where('mainTopic_id', 1)
                                 ->whereNull('videos.deleted_at')
                                 ->get();

    $videos_life = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->join('users','users.id','videos.user_id')
    ->where('users.age','<',15)
    ->where('videos.sistas', 1)
    ->where('mainTopic_id', 2)
    ->whereNull('videos.deleted_at')
    ->get();

    $videos_health = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->join('users','users.id','videos.user_id')
    ->where('users.age','<',15)
    ->where('videos.sistas', 1)
    ->where('mainTopic_id', 3)
    ->whereNull('videos.deleted_at')
    ->get();


    $videos_business = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->join('users','users.id','videos.user_id')
    ->where('users.age','<',15)
    ->where('videos.sistas', 1)
    ->where('mainTopic_id', 4)
    ->whereNull('videos.deleted_at')
    ->get();

    $videos_environnement = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->join('users','users.id','videos.user_id')
    ->where('users.age','<',15)
    ->where('videos.sistas', 1)
    ->where('mainTopic_id', 5)
    ->whereNull('videos.deleted_at')
    ->get();

    $videos_education = DB::Table('videos')->select('videos.*')
    ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
    ->join('users','users.id','videos.user_id')
    ->where('users.age','<',15)
    ->where('videos.sistas', 1)
    ->where('mainTopic_id', 6)
    ->whereNull('videos.deleted_at')
    ->get();

    return view('flow',compact('subtopics','videos_haltcare','videos_life','videos_health','videos_business','videos_environnement','videos_education'));
})->name('sistas')->middleware('auth');

Auth::routes();

Route::resource('users', 'UserController')->middleware('auth');

Route::get('suscribe/{channel_id}','UserController@suscribe')->name('suscribe');

Route::resource('profiles', 'ProfileController')->middleware('auth');

Route::resource('channels', 'channelController')->middleware('auth');

Route::resource('categorySecondaries', 'CategorySecondaryController')->middleware('auth');

Route::resource('categoryPrimaries', 'CategoryPrimaryController')->middleware('auth');

Route::resource('subTopics', 'SubTopicController')->middleware('auth');

Route::resource('mainTopics', 'MainTopicController')->middleware('auth');

Route::resource('videos', 'VideoController')->middleware('auth');
Route::get('likevideo/{video_id}','VideoController@likeVideo')->name('likevideo')->middleware('auth');
Route::get('dislikevideo/{video_id}','VideoController@dislikeVideo')->name('dislikevideo')->middleware('auth');


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

Route::view('timeShield', 'time');
Route::view('flow2', 'flow2');

Route::view('profil-management', 'profil-management');

Route::view('monFlow2', 'monFlow2');


Route::view('/chaineAbonne', 'chaineAbonne');

Route::get('/notification', function(){
    $channel = DB::Table('users')->select('channels.*')
    ->join('channels', 'users.id', 'channels.user_id')
    ->where('users.id', Auth::id())
    ->first();

    $follows = DB::table('abonne_channel')
    ->select('channels.*')
    ->join('channels','channels.id','abonne_channel.channel_id')
    ->where('abonne_channel.user_id', Auth::id())
    ->get();

    return view('notification',compact('channel','follows'));
})->name('notification');

Route::get('/parametre', function () {
    $channel = DB::Table('users')->select('channels.*')
    ->join('channels', 'users.id', 'channels.user_id')
    ->where('users.id', Auth::id())
    ->first();
    return view('users.parametre',compact('channel'));
})->name('parametre')->middleware('auth');

Route::get('/parametrePhoto', function () {
    $channel = DB::Table('users')->select('channels.*')
    ->join('channels', 'users.id', 'channels.user_id')
    ->where('users.id', Auth::id())
    ->first();
    return view('users.parametrePhoto',compact('channel'));
})->name('user.pictures')->middleware('auth');


Route::post('/parameter', [App\Http\Controllers\UserController::class, 'parameter'])->name('users.parameter')->middleware('auth');

Route::get('/picture/{alpha}', [App\Http\Controllers\UserController::class, 'picture'])->name('users.picture')->middleware('auth');

Route::get('/language', function(){
    return view('language');
})->name('language.show');

Route::get('/language/{lang}', [App\Http\Controllers\UserController::class, 'choose_language'])->name('language.choose');

Route::get('/playlist/{video}', [App\Http\Controllers\PlaylistController::class, 'add'])->name('playlist.add');

Route::get('/playlist/delete/{video}', [App\Http\Controllers\PlaylistController::class, 'remove'])->name('playlist.remove');

Route::resource('playlists', 'PlaylistController');

Route::get('/process', function(){

    $gateway = new Braintree\Gateway([
        'environment' => 'sandbox',
        'merchantId' => '2yw4qvsvxcr5fhyx',
        'publicKey' => 'j2cqsvvdjnvs2v5w',
        'privateKey' => '9605f4859f57d23d0ee40cedb88c834e'
        ]);

    $clientToken = $gateway->clientToken()->generate();

    $channel = DB::Table('users')->select('channels.*')
    ->join('channels', 'users.id', 'channels.user_id')
    ->where('users.id', Auth::id())
    ->first();
    return view('process',compact('channel','clientToken'));
})->name('process');

Route::post('/process', function(){

    //setting up braintree credentials.
    Braintree_Configuration::environment('sandbox');
    Braintree_Configuration::merchantId('2yw4qvsvxcr5fhyx');
    Braintree_Configuration::publicKey('j2cqsvvdjnvs2v5w');
    Braintree_Configuration::privateKey('9605f4859f57d23d0ee40cedb88c834e');

    $result = Braintree_Transaction::sale([
        'amount' => $_POST['amount'],
        'customer' => ['firstName' => Auth::user()->name],
        'paymentMethodNonce' => $_POST['payment_method_nonce'],
        'options' => [
            'submitForSettlement' => True
        ]
        ]);

    if ($result->success === true) {
        $facturation = DB::table('facturations')
        ->select('facturations.*')
        ->join('users', 'users.id', 'facturations.user_id')
        ->where('users.id', Auth::id() )
        ->orderByDesc('facturations.created_at')
        ->first();

        $start =  new \Datetime();
        if($_POST['amount'] > 0)
            if($_POST['amount'] == 100 || $_POST['amount'] == 50 ){
                $type = "Annually";
                if($_POST['amount'] == 100 ){
                    $profile = "OUMMATI";
                    DB::table('users')
                    ->where('users.id',Auth::id())
                    ->update(['type'=> $profile]);
                }else{
                    $profile = "SAHABA";
                    DB::table('users')
                    ->where('users.id',Auth::id())
                    ->update(['type'=> $profile]);}
            }
            else{
                $type = "Monthly";
                if($_POST['amount'] == 10 ){
                    $profile = "OUMMATI";
                    DB::table('users')
                    ->where('users.id',Auth::id())
                    ->update(['type'=> $profile]);}
                else{
                    $profile = "SAHABA";
                    DB::table('users')
                    ->where('users.id',Auth::id())
                    ->update(['type'=> $profile]);}
            }

        if(!$facturation){
            $end =  new \Datetime();
            if($type == "Monthly")
                $end->add(new DateInterval('P1M'));
            else
                $end->add(new DateInterval('P12M'));
        }else{
            $end_at = new \Datetime($facturation->end_at);
            if($type == "Monthly")
                $end = $end_at->add(new DateInterval('P1M'));
            else
                $end = $end_at->add(new DateInterval('P12M'));
        }

        DB::table('facturations')->insert([
            'amount' =>  $_POST['amount'],
            'type' => $type,
            'profile' => $profile,
            'user_id' => Auth::id(),
            'end_at' => $end,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $start = $start->format("d.m.Y");
        $end = $end->format("d.m.Y");

        Auth::user()->notify(new App\Notifications\InvoiceNotify());

        Flash::success('Payment made successfully ! <br> ~ Valid from ' .$start.  " to " .$end. ".<br> <a href='"  .route('home'). "' class='btn btn-info'>Quitter et retourner à l'acceuil</a> ");

    }
    else
        Flash::error('Error occured &#x1F534; '.$result->errors->message );
        // var_dump($result) );

    return redirect(route('payment'));
})->name('payment');


Route::resource('facturations', 'FacturationController');

Route::get('/tarif', function(){
    $channel = DB::Table('users')->select('channels.*')
    ->join('channels', 'users.id', 'channels.user_id')
    ->where('users.id', Auth::id())
    ->first();
    return view('tarif',compact('channel'));
})->name('tarifs');

Route::post('/tarif', function(){
    session(['amount'=>$_POST['amount']]);
    return redirect(route('process'));
})->name('tarif');

Route::view('time_shahid','time')->name('time_shahid')->middleware('auth');



