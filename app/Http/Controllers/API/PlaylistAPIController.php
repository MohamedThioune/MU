<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreatePlaylistRequest;
use App\Http\Requests\UpdatePlaylistRequest;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

use App\User;
use DB;
use Auth;

/**
 * Class PlaylistController
 * @package App\Http\Controllers\API
 */

class PlaylistAPIController extends AppBaseController
{
    /**
     * Display a listing of the Playlist.
     * GET|HEAD /playlists
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = Playlist::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $playlists = $query->get();

        return $this->sendResponse($playlists->toArray(), 'Playlists retrieved successfully');
    }

    public function users(Request $request, $id)
    {
        $message = "";
        $user = User::find($id);

        $playlists = DB::Table('playlists')->select('videos.*')
        ->join('videos', 'videos.id', 'playlists.video_id')
        ->whereNull('playlists.deleted_at')
        ->where('playlists.user_id', $id)
        ->get();

        if($user){
            if($playlists)
                if(count($playlists) > 0)
                    $message  = 'Playlists retrieved successfully for user : '.$user->name;
                else 
                    return $this->sendError('No videos on this user\'s playlist : '.$user->name);   
        }else 
            return $this->sendError('Usser with id {'.$id.'} not found, try again');   
        
        if ($request->get('skip')) 
            $playlists->skip($request->get('skip'));
        if ($request->get('limit')) 
            $playlists->limit($request->get('limit'));

        return $this->sendResponse($playlists, $message);
    
    }

    /**
     * Store a newly created Playlist in storage.
     * POST /playlists
     *
     * @param CreatePlaylistAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePlaylistRequest $request)
    {
        $input = $request->all();

        /** @var Playlist $playlist */
        $playlist = Playlist::create($input);

        return $this->sendResponse($playlist->toArray(), 'Playlist saved successfully');
    }

    /**
     * Display the specified Playlist.
     * GET|HEAD /playlists/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Playlist $playlist */
        $playlist = Playlist::find($id);

        if (empty($playlist)) {
            return $this->sendError('Playlist not found');
        }

        return $this->sendResponse($playlist->toArray(), 'Playlist retrieved successfully');
    }

    /**
     * Update the specified Playlist in storage.
     * PUT/PATCH /playlists/{id}
     *
     * @param  int $id
     * @param UpdatePlaylistAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlaylistRequest $request)
    {
        /** @var Playlist $playlist */
        $playlist = Playlist::find($id);

        if (empty($playlist)) {
            return $this->sendError('Playlist not found');
        }

        $playlist->fill($request->all());
        $playlist->save();

        return $this->sendResponse($playlist->toArray(), 'Playlist updated successfully');
    }

    /**
     * Remove the specified Playlist from storage.
     * DELETE /playlists/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Playlist $playlist */
        $playlist = Playlist::find($id);

        if (empty($playlist)) {
            return $this->sendError('Playlist not found');
        }

        $playlist->delete();

        return $this->sendSuccess('Playlist deleted successfully');
    }
}
