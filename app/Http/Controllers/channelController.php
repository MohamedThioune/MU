<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatechannelRequest;
use App\Http\Requests\UpdatechannelRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Channel;
use App\Models\CategoryPrimary;
use App\Models\CategorySecondary;
use App\Models\SubTopic;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use DB;

class channelController extends AppBaseController
{
    /**
     * Display a listing of the channel.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var channel $channels */
        // $channels = channel::all();

        // return view('channels.index')
        //     ->with('channels', $channels);

        $id = Auth::id();
        $channel = DB::Table('users')->select('channels.*')
                                      ->join('channels', 'users.id', 'channels.user_id')
                                      ->where('users.id', $id)
                                      ->get();
        $canal = false;
                                      
        return view('channels.index', compact('channel','canal'));
    }

    /**
     * Show the form for creating a new channel.
     *
     * @return Response
     */
    public function create()
    {
        /** @var category_primary $categorie_primaries */
        $category_primaries = CategoryPrimary::all();

        /** @var category_secondary $categorie_secondaries */
        $category_secondaries = CategorySecondary::all();

        return view('channels.create', compact('category_primaries','category_secondaries')  );
    }

    /**
     * Store a newly created channel in storage.
     *
     * @param CreatechannelRequest $request
     *
     * @return Response
     */
    public function store(CreatechannelRequest $request)
    {
        $input = $request->all();

        /** @var channel $channel */
        $channel = channel::create($input);

        Flash::success('Channel saved successfully.');

        return redirect(route('channels.index'));
    }

    /**
     * Display the specified channel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {

        if (empty($channel)) {
            Flash::error('Channel not found');

            return redirect(route('channels.index'));
        }

        return view('channels.show')->with('channel', $channel);
    }

    /**
     * Show the form for editing the specified channel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var channel $channel */
        $channel = channel::find($id);

        /** @var category_primary $categorie_primaries */
        $category_primaries = CategoryPrimary::all();

        /** @var category_secondary $categorie_secondaries */
        $category_secondaries = CategorySecondary::all();

        if (empty($channel)) {
            Flash::error('Channel not found');

            return redirect(route('channels.index'));
        }

        return view('channels.edit', compact('channel', 'category_primaries', 'category_secondaries'));
    }

    /**
     * Update the specified channel in storage.
     *
     * @param int $id
     * @param UpdatechannelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatechannelRequest $request)
    {
        /** @var channel $channel */
        $channel = channel::find($id);

        if (empty($channel)) {
            Flash::error('Channel not found');

            return redirect(route('channels.index'));
        }

        $channel->fill($request->all());
        $channel->save();

        Flash::success('Channel updated successfully.');

        return redirect(route('channels.index'));
    }

    /**
     * Remove the specified channel from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var channel $channel */
        $channel = channel::find($id);

        if (empty($channel)) {
            Flash::error('Channel not found');

            return redirect(route('channels.index'));
        }

        $channel->delete();

        Flash::success('Channel deleted successfully.');

        return redirect(route('channels.index'));
    }

    public function visit($id){
        $admin = false;
        $bool = false;
        $edit = false;
        $editing = false; 
        
        $channel = false;

        /** @var Channel $channel */
        $canal = DB::Table('users')->select('channels.*')
                                        ->join('channels', 'users.id', 'channels.user_id')
                                        ->where('users.id', Auth::id())
                                        ->first();

         /** @var Event $event */
         $events = DB::Table('channels')->select('events.*')
                                        ->join('events', 'channels.id', 'events.channel_id')
                                        ->where('channels.id', $id)
                                        ->orderBy('events.created_at','desc')
                                        ->limit(3)
                                        ->get();
         /** @var Activity $activities */
         $activities = DB::Table('channels')->select('activities.*')
                                        ->join('activities', 'channels.id', 'activities.channel_id')
                                        ->where('channels.id', $id)
                                        ->orderBy('activities.created_at','desc')
                                        ->limit(4)
                                        ->get();

         /** @var Contact $contact */
         $contact = DB::Table('channels')->select('contacts.*')
         ->join('contacts', 'channels.id', 'contacts.channel_id')
         ->where('channels.id', $id)
         ->orderBy('contacts.created_at','desc')
         ->first();                       
        
        /** @var subtopic $subtopics */
        $subtopics = SubTopic::all();

        /** @var category_primary $categorie_primaries */
        $category_primaries = CategoryPrimary::all();

        /** @var category_secondary $categorie_secondaries */
        $category_secondaries = CategorySecondary::all();

        $visit = channel::find($id);

        $videos_top = DB::table('videos', 'views')
        ->join('reads', 'videos.id', 'reads.video_id')            
        ->select(DB::raw('count(*) as views, reads.video_id'))
        ->groupBy('reads.video_id')
        ->where('videos.user_id', $visit->user_id)
        ->whereNull('videos.deleted_at')
        ->orderByDesc('views') 
        ->limit(3)
        ->get();

        $videos = DB::Table('users')->select('videos.*')
                                    ->join('videos', 'users.id', 'videos.user_id')
                                    ->where('users.id', $visit->user_id)
                                    ->whereNull('videos.deleted_at')
                                    ->orderByDesc('videos.created_at')
                                    ->limit(3)
                                    ->get();

        $playlists = DB::Table('playlists')->select('videos.*')
                    ->join('videos', 'videos.id', 'playlists.video_id')
                    ->whereNull('playlists.deleted_at')
                    ->where('playlists.user_id', $visit->user_id)
                    ->get();
                                    
        if($canal->id == $visit->id){
            $admin = true;
            $edit = true;
        }else{
            $bool = false;
            $edit = false;
        }

        $_COOKIE['state'] = 'Channel';

        return view('chaineAbonne', compact('canal','channel','visit', 'videos','subtopics','bool', 'admin','edit','events','activities','contact', 'videos_top', 'playlists'));

    }

    public function overview($id){

        $bool = true;
        $admin = false;
        $edit=false;
 
        /** @var Event $event */
        $events = DB::Table('channels')->select('events.*')
                                      ->join('events', 'channels.id', 'events.channel_id')
                                      ->where('channels.id', $id)
                                      ->orderBy('events.created_at','desc')
                                      ->limit(3)
                                      ->get();
        
        /** @var Activity $activities */
        $activities = DB::Table('channels')->select('activities.*')
                                        ->join('activities', 'channels.id', 'activities.channel_id')
                                        ->where('channels.id', $id)
                                        ->orderBy('activities.created_at','desc')
                                        ->limit(4)
                                        ->get();

        /** @var Contact $contact */
        $contact = DB::Table('channels')->select('contacts.*')
                                        ->join('contacts', 'channels.id', 'contacts.channel_id')
                                        ->where('channels.id', $id)
                                        ->orderBy('contacts.created_at','desc')
                                        ->first();

        $visit = channel::find($id);

        $videos_top = DB::table('videos', 'views')
        ->join('reads', 'videos.id', 'reads.video_id')            
        ->select(DB::raw('count(*) as views, reads.video_id'))
        ->groupBy('reads.video_id')
        ->where('videos.user_id', $visit->user_id)
        ->orderByDesc('views') 
        ->limit(3)
        ->get();

        $videos = DB::Table('users')->select('videos.*')
                                    ->join('videos', 'users.id', 'videos.user_id')
                                    ->where('users.id', $visit->user_id)
                                    ->whereNull('videos.deleted_at')
                                    ->orderByDesc('videos.created_at')
                                    ->limit(3)
                                    ->get();

        $playlists = DB::Table('playlists')->select('videos.*')
                    ->join('videos', 'videos.id', 'playlists.video_id')
                    ->whereNull('playlists.deleted_at')
                    ->where('playlists.user_id', $visit->user_id)
                    ->get();

        /** @var subtopic $subtopics */
        $subtopics = Subtopic::all();


        /** @var Channel $channel */
        $channel = DB::Table('users')->select('channels.*')
                                        ->join('channels', 'users.id', 'channels.user_id')
                                        ->where('users.id', Auth::id())
                                        ->first();
        $_COOKIE['state'] = 'Channel';

        if($channel->id == $visit->id)
            return view('chaineAbonne', compact('channel','visit', 'videos','videos_top', 'events', 'activities', 'contact', 'subtopics', 'bool','edit','admin','playlists'));
        else
            return view('chaineAbonne', compact('channel', 'visit', 'videos','videos_top', 'events', 'activities', 'contact', 'subtopics','bool','playlists'));
    }
}
