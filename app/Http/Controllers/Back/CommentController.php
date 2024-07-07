<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $comments = Comment::orderBy('id','DESC')->get();
        return view('back.blog.comment',compact('comments'));
    }

    public function update(Request $request, Comment $comment)
    {
        //dd($comment);
        $comment->update(['comment'=>$request->comment]);
        return redirect()->back()->with('success-alert2', 'Update successfully.');
    }

    public function remove(Comment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('success-alert2', 'Remove successfully.');
    }
}
