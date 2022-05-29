<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comment = Comment::all();
        return CommentResource::collection($comment);
    }

    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'comment'=>'required'
        ]);

        $comment = new Comment([
            'name' => $request->get('name'),
            'comment' => $request->get('comment')
        ]);
        $comment->save();
        //return redirect('/comments')->with('success', 'Contact saved!');
        return Comment::all();
    }
}
