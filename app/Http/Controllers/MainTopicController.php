<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMainTopicRequest;
use App\Http\Requests\UpdateMainTopicRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\MainTopic;
use App\Models\SubTopic;
use Illuminate\Http\Request;
use Flash;
use Response;

class MainTopicController extends AppBaseController
{
    /**
     * Display a listing of the MainTopic.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var MainTopic $mainTopics */
        $mainTopics = MainTopic::all();
        $subTopics = SubTopic::all();

        return view('main_topics.index', compact('mainTopics', 'subTopics'));
    }

    /**
     * Show the form for creating a new MainTopic.
     *
     * @return Response
     */
    public function create()
    {
        /** @var SubTopic $subTopics */
        $subTopics = SubTopic::all();

        return view('main_topics.create', compact('subTopics'));
    }

    /**
     * Store a newly created MainTopic in storage.
     *
     * @param CreateMainTopicRequest $request
     *
     * @return Response
     */
    public function store(CreateMainTopicRequest $request)
    {
        $input = $request->all();

        /** @var MainTopic $mainTopic */
        $mainTopic = MainTopic::create($input);

        Flash::success('Main Topic saved successfully.');

        return redirect(route('mainTopics.index'));
    }

    /**
     * Display the specified MainTopic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var MainTopic $mainTopic */
        $mainTopic = MainTopic::find($id);

        if (empty($mainTopic)) {
            Flash::error('Main Topic not found');

            return redirect(route('mainTopics.index'));
        }

        return view('main_topics.show')->with('mainTopic', $mainTopic);
    }

    /**
     * Show the form for editing the specified MainTopic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var MainTopic $mainTopic */
        $mainTopic = MainTopic::find($id);

        /** @var SubTopic $subtopic */
        $subTopics = SubTopic::all();

        if (empty($mainTopic)) {
            Flash::error('Main Topic not found');

            return redirect(route('mainTopics.index'));
        }

        return view('main_topics.edit', compact('mainTopic','subTopics'));
    }

    /**
     * Update the specified MainTopic in storage.
     *
     * @param int $id
     * @param UpdateMainTopicRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMainTopicRequest $request)
    {
        /** @var MainTopic $mainTopic */
        $mainTopic = MainTopic::find($id);

        if (empty($mainTopic)) {
            Flash::error('Main Topic not found');

            return redirect(route('mainTopics.index'));
        }

        $mainTopic->fill($request->all());
        $mainTopic->save();

        Flash::success('Main Topic updated successfully.');

        return redirect(route('mainTopics.index'));
    }

    /**
     * Remove the specified MainTopic from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var MainTopic $mainTopic */
        $mainTopic = MainTopic::find($id);

        if (empty($mainTopic)) {
            Flash::error('Main Topic not found');

            return redirect(route('mainTopics.index'));
        }

        $mainTopic->delete();

        Flash::success('Main Topic deleted successfully.');

        return redirect(route('mainTopics.index'));
    }
}
