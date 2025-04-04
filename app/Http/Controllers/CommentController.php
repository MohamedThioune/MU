<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Comment;
use App\Models\Unlike;
use App\Models\UnlikeComment;
use App\Models\Video;
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



    public function likeComment($comment_id){
        $user = Auth::user();
        $comment = Comment::find($comment_id);

        $user->toggleLike($comment);

        $unlike = UnlikeComment::where([
            ['user_id', '=', $user->id],
            ['comment_id', '=', $comment->id],
        ])->delete();

        return redirect()->back();
    }

    public function dislikeComment($comment_id){
        $user = Auth::user();
        $comment = Comment::find($comment_id);

        $unlikes = UnlikeComment::where([
            ['user_id', '=', $user->id],
            ['comment_id', '=', $comment->id],
        ])->first();

        if(empty($unlikes)){
            $unlike = new UnlikeComment();

            $unlike->user_id = Auth::user()->id;
            $unlike->comment_id = $comment_id;
            $unlike->save();

        }
        else{
            $unlike = UnlikeComment::where([
                ['user_id', '=', $user->id],
                ['comment_id', '=', $comment->id],
            ])->delete();
        }
        $user->unlike($comment);



        return redirect()->back();
    }
}
