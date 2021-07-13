<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSubtopicAPIRequest;
use App\Http\Requests\API\UpdateSubtopicAPIRequest;
use App\Models\SubTopic;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;
use DB;
/**
 * Class SubtopicController
 * @package App\Http\Controllers\API
 */

class SubtopicAPIController extends AppBaseController
{
    /**
     * Display a listing of the Subtopic by their main categories.
     * GET|HEAD /subtopics
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {    

         /** @var SubTopic $subtopics */
         $subtopics_health = DB::Table('sub_topics')->select('sub_topics.*')
         ->join('main_topics', 'main_topics.id', 'sub_topics.maintopic_id')
         ->where('sub_topics.maintopic_id', 3)
         ->get();
 
         $subtopics_life = DB::Table('sub_topics')->select('sub_topics.*')
         ->join('main_topics', 'main_topics.id', 'sub_topics.maintopic_id')
         ->where('sub_topics.maintopic_id', 2)
         ->get();
 
         $subtopics_healthcare = DB::Table('sub_topics')->select('sub_topics.*')
         ->join('main_topics', 'main_topics.id', 'sub_topics.maintopic_id')
         ->where('sub_topics.maintopic_id', 1)
         ->get();
 
         $subtopics_education = DB::Table('sub_topics')->select('sub_topics.*')
         ->join('main_topics', 'main_topics.id', 'sub_topics.maintopic_id')
         ->where('sub_topics.maintopic_id', 6)
         ->get();
 
         $subtopics_business = DB::Table('sub_topics')->select('sub_topics.*')
         ->join('main_topics', 'main_topics.id', 'sub_topics.maintopic_id')
         ->where('sub_topics.maintopic_id', 4)
         ->get();
 
         $subtopics_new = DB::Table('sub_topics')->select('sub_topics.*')
         ->join('main_topics', 'main_topics.id', 'sub_topics.maintopic_id')
         ->where('sub_topics.maintopic_id', 5)
         ->get();
 
         $subtopics_inshaallah = DB::Table('sub_topics')->select('sub_topics.*')
         ->join('main_topics', 'main_topics.id', 'sub_topics.maintopic_id')
         ->where('sub_topics.maintopic_id', 7)
         ->get();

         $subtopics  = array('healthcare' => $subtopics_healthcare, 'life' => $subtopics_life, 'health' => $subtopics_health, 'business' => $subtopics_business, 'education' => $subtopics_education, 'new' => $subtopics_new, 'inshaallah' => $subtopics_inshaallah);

 
        return $this->sendResponse($subtopics, 'Subtopics retrieved successfully');
    }

    /**
     * Store a newly created Subtopic in storage.
     * POST /subtopics
     *
     * @param CreateSubtopicAPIRequest $request
     *
     * @return Response
     */
    public function create(CreateSubtopicAPIRequest $request)
    {
        $input = $request->all();

        /** @var Subtopic $subtopic */
        $subtopic = SubTopic::create($input);

        return $this->sendResponse($subtopic->toArray(), 'Subtopic saved successfully');
    }

    /**
     * Display the specified Subtopic.
     * GET|HEAD /subtopics/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Subtopic $subtopic */
        $subtopic = SubTopic::find($id);

        if (empty($subtopic)) {
            return $this->sendError('Subtopic not found');
        }

        return $this->sendResponse($subtopic->toArray(), 'Subtopic retrieved successfully');
    }

    /**
     * Update the specified Subtopic in storage.
     * PUT/PATCH /subtopics/{id}
     *
     * @param  int $id
     * @param UpdateSubtopicAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubtopicAPIRequest $request)
    {
        /** @var Subtopic $subtopic */
        $subtopic = SubTopic::find($id);

        if (empty($subtopic)) {
            return $this->sendError('Subtopic not found');
        }

        $subtopic->fill($request->all());
        $subtopic->save();

        return $this->sendResponse($subtopic->toArray(), 'Subtopic updated successfully');
    }

    /**
     * Remove the specified Subtopic from storage.
     * DELETE /subtopics/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Subtopic $subtopic */
        $subtopic = SubTopic::find($id);

        if (empty($subtopic)) {
            return $this->sendError('Subtopic not found');
        }

        $subtopic->delete();

        return $this->sendSuccess('Subtopic deleted successfully');
    }
}
