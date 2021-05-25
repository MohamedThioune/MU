<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateResponseCommentRequest;
use App\Http\Requests\UpdateResponseCommentRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\ResponseComment;
use App\Models\Comment;
use Illuminate\Http\Request;
use Flash;
use Response;

use Auth;
use DB;

class ResponseCommentController extends AppBaseController
{
    /**
     * Display a listing of the ResponseComment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var ResponseComment $responseComments */
        $responseComments = ResponseComment::all();

        return view('response_comments.index')
            ->with('responseComments', $responseComments);
    }

    /**
     * Show the form for creating a new ResponseComment.
     *
     * @return Response
     */
    public function create()
    {
        return view('response_comments.create');
    }

    /**
     * Store a newly created ResponseComment in storage.
     *
     * @param CreateResponseCommentRequest $request
     *
     * @return Response
     */
    public function store(CreateResponseCommentRequest $request)
    {
        $input = $request->all();

        /** @var ResponseComment $responseComment */
        $responseComment = ResponseComment::create($input);

        Flash::success('Response Comment saved successfully.');

        return redirect(route('responseComments.index'));
    }

    public function contribute()
    {
        $input = ['response_value' => htmlspecialchars($_GET['response_value']), 'user_id' => Auth::id(), 'comment_id' => htmlspecialchars($_GET['comment_id'])];

        /** @var Comment $comment */
        $response = ResponseComment::create($input);

        Flash::success('Comment saved successfully.');

        $comments = DB::Table('comments')->select('users.*','comments.value' ,'comments.id as comment_id' ,'comments.created_at as created_at')
        ->join('videos', 'videos.id', 'comments.video_id')
        ->join('users', 'videos.user_id', 'users.id')
        ->where('comments.video_id',  htmlspecialchars($_GET['video_id']))
        ->get();

        $reads = DB::Table('reads')
        ->where('video_id', $_GET['video_id'])
        ->count();

        return view('play',compact('comments','reads'));
    }

    /**
     * Display the specified ResponseComment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ResponseComment $responseComment */
        $responseComment = ResponseComment::find($id);

        if (empty($responseComment)) {
            Flash::error('Response Comment not found');

            return redirect(route('responseComments.index'));
        }

        return view('response_comments.show')->with('responseComment', $responseComment);
    }

    /**
     * Show the form for editing the specified ResponseComment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var ResponseComment $responseComment */
        $responseComment = ResponseComment::find($id);

        if (empty($responseComment)) {
            Flash::error('Response Comment not found');

            return redirect(route('responseComments.index'));
        }

        return view('response_comments.edit')->with('responseComment', $responseComment);
    }

    /**
     * Update the specified ResponseComment in storage.
     *
     * @param int $id
     * @param UpdateResponseCommentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateResponseCommentRequest $request)
    {
        /** @var ResponseComment $responseComment */
        $responseComment = ResponseComment::find($id);

        if (empty($responseComment)) {
            Flash::error('Response Comment not found');

            return redirect(route('responseComments.index'));
        }

        $responseComment->fill($request->all());
        $responseComment->save();

        Flash::success('Response Comment updated successfully.');

        return redirect(route('responseComments.index'));
    }

    /**
     * Remove the specified ResponseComment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ResponseComment $responseComment */
        $responseComment = ResponseComment::find($id);

        if (empty($responseComment)) {
            Flash::error('Response Comment not found');

            return redirect(route('responseComments.index'));
        }

        $responseComment->delete();

        Flash::success('Response Comment deleted successfully.');

        return redirect(route('responseComments.index'));
    }
}
