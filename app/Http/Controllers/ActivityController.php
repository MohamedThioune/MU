<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Activity;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use DB;

class ActivityController extends AppBaseController
{
    /**
     * Display a listing of the Activity.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Activity $activities */
        $activities = Activity::all();

        return view('activities.index')
            ->with('activities', $activities);
    }

    /**
     * Show the form for creating a new Activity.
     *
     * @return Response
     */
    public function create()
    {

        $channel = DB::Table('users')->select('channels.*')
        ->join('channels', 'users.id', 'channels.user_id')
        ->where('users.id', Auth::id())
        ->first();

        return view('activities.create', compact('channel'));
    }

    /**
     * Store a newly created Activity in storage.
     *
     * @param CreateActivityRequest $request
     *
     * @return Response
     */
    public function store(CreateActivityRequest $request)
    {

        $input = $request->all();

        $channel = DB::Table('users')->select('channels.*')
        ->join('channels', 'users.id', 'channels.user_id')
        ->where('users.id', Auth::id())
        ->first();

        /** @var Activity $activity */
        $activity = Activity::create($input);

        Flash::success('Activities actualised sucessfully');

        return redirect(route('channel.fly', $channel->id));
    }

    /**
     * Display the specified Activity.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Activity $activity */
        $activity = Activity::find($id);

        if (empty($activity)) {
            Flash::error('Activity not found');

            return redirect(route('activities.index'));
        }

        return view('activities.show')->with('activity', $activity);
    }

    /**
     * Show the form for editing the specified Activity.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Activity $activity */
        $activity = Activity::find($id);

        $channel = DB::Table('users')->select('channels.*')
        ->join('channels', 'users.id', 'channels.user_id')
        ->where('users.id', Auth::id())
        ->first();

        if (empty($activity)) {
            Flash::error('Activity not found');

            return redirect(route('activities.index'));
        }

        return view('activities.edit')->with('activity', $activity);
    }

    /**
     * Update the specified Activity in storage.
     *
     * @param int $id
     * @param UpdateActivityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateActivityRequest $request)
    {
        /** @var Activity $activity */
        $activity = Activity::find($id);

        if (empty($activity)) {
            Flash::error('Activity not found');

            return redirect(route('activities.index'));
        }

        $activity->fill($request->all());
        $activity->save();

        Flash::success('Activity updated successfully.');

        return redirect(route('activities.index'));
    }

    /**
     * Remove the specified Activity from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Activity $activity */
        $activity = Activity::find($id);

        if (empty($activity)) {
            Flash::error('Activity not found');

            return redirect(route('activities.index'));
        }

        $activity->delete();

        Flash::success('Activity deleted successfully.');

        return redirect(route('activities.index'));
    }
}
