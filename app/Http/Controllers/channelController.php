<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatechannelRequest;
use App\Http\Requests\UpdatechannelRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\channel;
use App\Models\CategoryPrimary;
use App\Models\CategorySecondary;
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
                                      
        return view('channels.index')
            ->with('channel', $channel);
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
}
