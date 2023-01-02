<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function showPost(){
        $posts = Post::with("comments")->get();
        return view("list", compact("posts"));
    }

    public function postInfo($title, $id){
        $post = Post::where("id", $id)->get()[0];
        $comments = $post->comments;
        return view("post", compact("comments", "post"));
    }

    public function getPost(){
        $posts = Post::select()->get();
        return view("admin.admin", compact("posts"));
    }

    public function addPost(Request $request){
        if ($request->input("delete")) {
            $id = $request->input("delete");
            Post::where("id", $id)->delete();
            Comment::where("post_id", $id)->delete();
        }
        if ($request->input("add") != "") {
            Post::create([
                "title" => $request->input("new_post")
            ]);
        }
        return $this->getPost();
    }

    public function showComments($title, $id){
        $post = Post::where("id", $id)->get()[0];
        $comments = $post->comments;
        return view("admin.comment", compact("comments", "post"));
    }

    public function deleteComment($title, $id, Request $request){
        if ($request->input("delete")) {
            $comment_id = $request->input("delete");
            Comment::where("id", $comment_id)->delete();
        }
        return $this->showComments($title, $id);
    }

    public function addComment(Request $request) {
        $id = $request->input("id");
        $author = $request->input("newAuthor");
        $comment = $request->input("newComment");
        Comment::create([
            "author" => $author,
            "comment" => $comment,
            "post_id" => $id
        ]);

        return response()->json($request->all());
    }
}
