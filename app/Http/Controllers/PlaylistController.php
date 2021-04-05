<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlaylistRequest;
use App\Http\Requests\UpdatePlaylistRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use DB;

class PlaylistController extends AppBaseController
{
    /**
     * Display a listing of the Playlist.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Playlist $playlists */
        $playlists = Playlist::all();

        return view('playlists.index')
            ->with('playlists', $playlists);
    }

    /**
     * Show the form for creating a new Playlist.
     *
     * @return Response
     */
    public function create()
    {
        return view('playlists.create');
    }

    /**
     * Store a newly created Playlist in storage.
     *
     * @param CreatePlaylistRequest $request
     *
     * @return Response
     */
    public function store(CreatePlaylistRequest $request)
    {
        $input = $request->all();

        /** @var Playlist $playlist */
        $playlist = Playlist::create($input);

        Flash::success('Playlist saved successfully.');

        return redirect(route('playlists.index'));
    }

    public function add($video){
        $user = Auth::id();
        
        $input = ['user_id' => $user, 'video_id' => $video, 'created_at' => now(), 'updated_at' => now()];
        
        $playlist = Playlist::create($input);
        
        return redirect()->back();
    }
    /**
     * Display the specified Playlist.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Playlist $playlist */
        $playlist = Playlist::find($id);

        if (empty($playlist)) {
            Flash::error('Playlist not found');

            return redirect(route('playlists.index'));
        }

        return view('playlists.show')->with('playlist', $playlist);
    }

    /**
     * Show the form for editing the specified Playlist.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Playlist $playlist */
        $playlist = Playlist::find($id);

        if (empty($playlist)) {
            Flash::error('Playlist not found');

            return redirect(route('playlists.index'));
        }

        return view('playlists.edit')->with('playlist', $playlist);
    }

    /**
     * Update the specified Playlist in storage.
     *
     * @param int $id
     * @param UpdatePlaylistRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlaylistRequest $request)
    {
        /** @var Playlist $playlist */
        $playlist = Playlist::find($id);

        if (empty($playlist)) {
            Flash::error('Playlist not found');

            return redirect(route('playlists.index'));
        }

        $playlist->fill($request->all());
        $playlist->save();

        Flash::success('Playlist updated successfully.');

        return redirect(route('playlists.index'));
    }

    /**
     * Remove the specified Playlist from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Playlist $playlist */
        $playlist = Playlist::find($id);

        if (empty($playlist)) {
            Flash::error('Playlist not found');

            return redirect(route('playlists.index'));
        }

        $playlist->delete();

        Flash::success('Playlist deleted successfully.');

        return redirect(route('playlists.index'));
    }

    public function remove($video){
        
        DB::table('playlists')
        ->where('playlists.user_id', Auth::id())
        ->where('playlists.video_id', $video)
        ->delete();

        return redirect()->back();
    }
}
