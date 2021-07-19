<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use App\Models\ResponseComment;
use App\Models\Video;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;
use DB;

/**
 * Class CommentController
 * @package App\Http\Controllers\API
 */

class CommentAPIController extends AppBaseController
{
    /**
     * Display a listing of the Comment.
     * GET|HEAD /comments
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $comments = Comment::all();

        if ($request->get('skip')) {
            $comments->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $comments->limit($request->get('limit'));
        }

        return $this->sendResponse($comments->toArray(), 'Comments retrieved successfully for all videos');
    }

    public function comments(Request $request, $id)
    {
        $message = "";
        $video = Video::find($id);

        $comments = DB::Table('comments')->select('comments.user_id','comments.value' ,'comments.id as comment_id' ,'comments.created_at')
        ->where('comments.video_id', $id)
        ->orderBy('comments.created_at', 'desc')
        ->get();


        if($video){
            if($comments)
                if(count($comments))
                    $message  = 'Comments retrieved successfully for video : '.$video->main_title;
                else 
                    return $this->sendError('Nobody comment this video : '.$video->main_title);   
        }else 
            return $this->sendError('Video with id {'.$id.'} not found, try again');   
        
        if ($request->get('skip')) {
            $comments->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $comments->limit($request->get('limit'));
        }

        return $this->sendResponse($comments, $message);
    }

    public function response_comments($id){
        $message = "";
        $comment = Comment::find($id);

        $response_comments = DB::Table('response_comments')->select('response_comments.*')
        ->where('response_comments.comment_id', $id)
        ->orderBy('response_comments.created_at', 'desc')
        ->get();

        if($comment){
            if($response_comments)
                if(count($response_comments))
                    $message  = 'Responses retrieved successfully for comment with :'.$comment->value;
                else 
                    return $this->sendError('No response found for this comment : '.$comment->value);   
        }else 
            return $this->sendError('Comment with id {'.$id.'} not found, try again');   

        

        return $this->sendResponse($response_comments, $message);
    }

    public function users_comments($id){
        $message = "";
        $video = Video::find($id);

        /* Store users who have commented */
        $users = array();
        $comments = DB::Table('comments')->select('comments.user_id','comments.value' ,'comments.id as comment_id' ,'comments.created_at')
        ->where('comments.video_id', $id)
        ->orderBy('comments.created_at', 'desc')
        ->get();

        if($video){
            if($comments)
                if(count($comments))
                    $message  = 'User comments retrieved successfully for video : '.$video->main_title;
                else 
                    return $this->sendError('Nobody comment this video : '.$video->main_title);   
        }else 
            return $this->sendError('Video with id {'.$id.'} not found, try again');   

        foreach($comments as $comment){
            $auth =  User::find($comment->user_id);
            array_push($users, $auth);
        };

        return $this->sendResponse($users, $message);
    }

    /**
     * Store a newly created Comment in storage.
     * POST /comments
     *
     * @param CreateCommentAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCommentRequest $request)
    {
        $input = $request->all();

        /** @var Comment $comment */
        $comment = Comment::create($input);

        return $this->sendResponse($comment->toArray(), 'Comment saved successfully');
    }

    /**
     * Display the specified Comment.
     * GET|HEAD /comments/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Comment $comment */
        $comment = Comment::find($id);

        if (empty($comment)) {
            return $this->sendError('Comment not found');
        }

        return $this->sendResponse($comment->toArray(), 'Comment retrieved successfully');
    }

    /**
     * Update the specified Comment in storage.
     * PUT/PATCH /comments/{id}
     *
     * @param  int $id
     * @param UpdateCommentAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCommentRequest $request)
    {
        /** @var Comment $comment */
        $comment = Comment::find($id);

        if (empty($comment)) {
            return $this->sendError('Comment not found');
        }

        $comment->fill($request->all());
        $comment->save();

        return $this->sendResponse($comment->toArray(), 'Comment updated successfully');
    }

    /**
     * Remove the specified Comment from storage.
     * DELETE /comments/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Comment $comment */
        $comment = Comment::find($id);

        if (empty($comment)) {
            return $this->sendError('Comment not found');
        }

        $comment->delete();

        return $this->sendSuccess('Comment deleted successfully');
    }
}
