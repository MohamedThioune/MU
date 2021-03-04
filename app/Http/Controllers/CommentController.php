<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Comment;
use Illuminate\Http\Request;
use Flash;
use Response;

use Auth;
use DB;
class CommentController extends AppBaseController
{
    /**
     * Display a listing of the Comment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Comment $comments */
        $comments = Comment::all();

        return view('comments.index')
            ->with('comments', $comments);
    }

    /**
     * Show the form for creating a new Comment.
     *
     * @return Response
     */
    public function create()
    {
        return view('comments.create');
    }

    /**
     * Store a newly created Comment in storage.
     *
     * @param CreateCommentRequest $request
     *
     * @return Response
     */
    public function store(CreateCommentRequest $request)
    { 
        $input = $request->all();
        $input['user_id'] =  Auth::id();

        /** @var Comment $comment */
        $comment = Comment::create($input);

        Flash::success('Comment saved successfully.');

        return redirect('/play'.'/'.$request->video_id);
    }

    public function contribute()
    {
        $input = ['value' => htmlspecialchars($_GET['value']), 'user_id' => Auth::id(), 'video_id' => htmlspecialchars($_GET['video_id'])];

        /** @var Comment $comment */
        $comment = Comment::create($input);

        Flash::success('Comment saved successfully.');

        $comments = DB::Table('comments')->select('users.*','comments.value' ,'comments.id as comment_id' ,'comments.created_at as created_at')
        ->join('users', 'comments.user_id', 'users.id')
        ->where('comments.video_id',  htmlspecialchars($_GET['video_id']))
        ->get();

        $reads = DB::Table('reads')
        ->where('video_id', $_GET['video_id'])
        ->count();

        return view('play',compact('comments', 'reads'));
    }


    /**
     * Display the specified Comment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Comment $comment */
        $comment = Comment::find($id);

        if (empty($comment)) {
            Flash::error('Comment not found');

            return redirect(route('comments.index'));
        }

        return view('comments.show')->with('comment', $comment);
    }

    /**
     * Show the form for editing the specified Comment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Comment $comment */
        $comment = Comment::find($id);

        if (empty($comment)) {
            Flash::error('Comment not found');

            return redirect(route('comments.index'));
        }

        return view('comments.edit')->with('comment', $comment);
    }

    /**
     * Update the specified Comment in storage.
     *
     * @param int $id
     * @param UpdateCommentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCommentRequest $request)
    {
        /** @var Comment $comment */
        $comment = Comment::find($id);

        if (empty($comment)) {
            Flash::error('Comment not found');

            return redirect(route('comments.index'));
        }

        $comment->fill($request->all());
        $comment->save();

        Flash::success('Comment updated successfully.');

        return redirect(route('comments.index'));
    }

    /**
     * Remove the specified Comment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Comment $comment */
        $comment = Comment::find($id);

        if (empty($comment)) {
            Flash::error('Comment not found');

            return redirect(route('comments.index'));
        }

        $comment->delete();

        Flash::success('Comment deleted successfully.');

        return redirect(route('comments.index'));
    }
}
