<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubTopicRequest;
use App\Http\Requests\UpdateSubTopicRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\SubTopic;
use Illuminate\Http\Request;
use Flash;
use Response;


class SubTopicController extends AppBaseController
{
    /**
     * Display a listing of the SubTopic.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var SubTopic $subTopics */
        $subTopics = SubTopic::all();

        return view('sub_topics.index',compact('subTopics'));
    }

    /**
     * Show the form for creating a new SubTopic.
     *
     * @return Response
     */
    public function create()
    {
        return view('sub_topics.create');
    }

    /**
     * Store a newly created SubTopic in storage.
     *
     * @param CreateSubTopicRequest $request
     *
     * @return Response
     */
    public function store(CreateSubTopicRequest $request)
    {
        $input = $request->all();

        /** @var SubTopic $subTopic */
        $subTopic = SubTopic::create($input);

        Flash::success('Sub Topic saved successfully.');

        return redirect(route('subTopics.index'));
    }

    /**
     * Display the specified SubTopic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var SubTopic $subTopic */
        $subTopic = SubTopic::find($id);

        if (empty($subTopic)) {
            Flash::error('Sub Topic not found');

            return redirect(route('subTopics.index'));
        }

        return view('sub_topics.show')->with('subTopic', $subTopic);
    }

    /**
     * Show the form for editing the specified SubTopic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var SubTopic $subTopic */
        $subTopic = SubTopic::find($id);

        if (empty($subTopic)) {
            Flash::error('Sub Topic not found');

            return redirect(route('subTopics.index'));
        }

        return view('sub_topics.edit')->with('subTopic', $subTopic);
    }

    /**
     * Update the specified SubTopic in storage.
     *
     * @param int $id
     * @param UpdateSubTopicRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubTopicRequest $request)
    {
        /** @var SubTopic $subTopic */
        $subTopic = SubTopic::find($id);

        if (empty($subTopic)) {
            Flash::error('Sub Topic not found');

            return redirect(route('subTopics.index'));
        }

        $subTopic->fill($request->all());
        $subTopic->save();

        Flash::success('Sub Topic updated successfully.');

        return redirect(route('subTopics.index'));
    }

    /**
     * Remove the specified SubTopic from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var SubTopic $subTopic */
        $subTopic = SubTopic::find($id);

        if (empty($subTopic)) {
            Flash::error('Sub Topic not found');

            return redirect(route('subTopics.index'));
        }

        $subTopic->delete();

        Flash::success('Sub Topic deleted successfully.');

        return redirect(route('subTopics.index'));
    }
}
