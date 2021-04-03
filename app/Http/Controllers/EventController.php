<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Event;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use DB;

class EventController extends AppBaseController
{
    /**
     * Display a listing of the Event.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Event $events */
        $events = Event::all();

        return view('events.index')
            ->with('events', $events);
    }

    /**
     * Show the form for creating a new Event.
     *
     * @return Response
     */
    public function create()
    {
        $channel = DB::Table('users')->select('channels.*')
        ->join('channels', 'users.id', 'channels.user_id')
        ->where('users.id', Auth::id())
        ->first();

        return view('events.create', compact('channel'));
    }

    /**
     * Store a newly created Event in storage.
     *
     * @param CreateEventRequest $request
     *
     * @return Response
     */
    public function store(CreateEventRequest $request)
    {
        $input = $request->all();

        $channel = DB::Table('users')->select('channels.*')
        ->join('channels', 'users.id', 'channels.user_id')
        ->where('users.id', Auth::id())
        ->first();

        /** @var Event $event */
        $event = Event::create($input);

        Flash::success('Fresh flow actualised');

        return redirect(route('channel.fly', $channel->id));
    }

    /**
     * Display the specified Event.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Event $event */
        $event = Event::find($id);

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

        return view('events.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified Event.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Event $event */
        $event = Event::find($id);

        $channel = DB::Table('users')->select('channels.*')
        ->join('channels', 'users.id', 'channels.user_id')
        ->where('users.id', Auth::id())
        ->first();

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

        return view('events.edit',compact('channel','event'));
    }

    /**
     * Update the specified Event in storage.
     *
     * @param int $id
     * @param UpdateEventRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEventRequest $request)
    {
        /** @var Event $event */
        $event = Event::find($id);

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

        $event->fill($request->all());
        $event->save();

        Flash::success('Event updated successfully.');

        return redirect(route('events.index'));
    }

    /**
     * Remove the specified Event from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Event $event */
        $event = Event::find($id);

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

        $event->delete();

        Flash::success('Event deleted successfully.');

        return redirect(route('events.index'));
    }
}
