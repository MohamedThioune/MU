<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateVideoAPIRequest;
use App\Http\Requests\API\UpdateVideoAPIRequest;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;
use DB;
/**
 * Class VideoController
 * @package App\Http\Controllers\API
 */

class VideoAPIController extends AppBaseController
{
    /**
     * Display a listing of the Video.
     * GET|HEAD /videos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $videos = Video::all();

        if ($request->get('skip')) {
            $videos->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $videos->limit($request->get('limit'));
        }

        return $this->sendResponse($videos->toArray(), 'Videos retrieved successfully');
    }

    function videos_categories(Request $request)
    {
        /* 
        * All videos by main_topic
        */

        $videos_haltcare = DB::Table('videos')->select('videos.*')
                                 ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
                                 ->join('users','users.id','videos.user_id')
                                 ->where('videos.sistas', 0)
                                 ->where('mainTopic_id', 1)
                                 ->whereNull('videos.deleted_at')
                                 ->get();

        $videos_life = DB::Table('videos')->select('videos.*')
                                ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
                                ->join('users','users.id','videos.user_id')
                                ->where('videos.sistas', 0)
                                ->where('mainTopic_id', 2)
                                ->whereNull('videos.deleted_at')
                                ->get();

        $videos_health = DB::Table('videos')->select('videos.*')
                                ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
                                ->join('users','users.id','videos.user_id')
                                ->where('videos.sistas', 0)
                                ->where('mainTopic_id', 3)
                                ->whereNull('videos.deleted_at')
                                ->get();


        $videos_business = DB::Table('videos')->select('videos.*')
                                ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
                                ->join('users','users.id','videos.user_id')
                                ->where('videos.sistas', 0)
                                ->where('mainTopic_id', 4)
                                ->whereNull('videos.deleted_at')
                                ->get();

        $videos_environnement = DB::Table('videos')->select('videos.*')
                                ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
                                ->join('users','users.id','videos.user_id')
                                ->where('videos.sistas', 0)
                                ->where('mainTopic_id', 5)
                                ->whereNull('videos.deleted_at')
                                ->get();

        $videos_education = DB::Table('videos')->select('videos.*')
                                ->join('sub_topics', 'sub_topics.id','videos.subtopic_id')
                                ->join('users','users.id','videos.user_id')
                                ->where('videos.sistas', 0)
                                ->where('mainTopic_id', 6)
                                ->whereNull('videos.deleted_at')
                                ->get();

        $videos  = array('healthcare' => $videos_haltcare, 'life' => $videos_life, 'environnement' => $videos_environnement, 'education' => $videos_education);

        return $this->sendResponse($videos, 'Videos retrieved successfully by main categories');
    }

    /**
     * Store a newly created Video in storage.
     * POST /videos
     *
     * @param CreateVideoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateVideoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Video $video */
        $video = Video::create($input);

        return $this->sendResponse($video->toArray(), 'Video saved successfully');
    }

    /**
     * Display the specified Video.
     * GET|HEAD /videos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Video $video */
        $video = Video::find($id);

        if (empty($video)) {
            return $this->sendError('Video not found');
        }

        return $this->sendResponse($video->toArray(), 'Video retrieved successfully');
    }

    /**
     * Update the specified Video in storage.
     * PUT/PATCH /videos/{id}
     *
     * @param  int $id
     * @param UpdateVideoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVideoAPIRequest $request)
    {
        /** @var Video $video */
        $video = Video::find($id); 

        if (empty($video)) {
            return $this->sendError('Video not found');
        }

        $video->fill($request->all());
        $video->save();

        return $this->sendResponse($video->toArray(), 'Video updated successfully');
    }

    /**
     * Remove the specified Video from storage.
     * DELETE /videos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Video $video */
        $video = Video::find($id);

        if (empty($video)) {
            return $this->sendError('Video not found');
        }

        $video->delete();

        return $this->sendSuccess('Video deleted successfully');
    }
}
