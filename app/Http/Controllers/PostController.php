<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Author;

class PostController extends Controller
{

    public function addPost(){

        $post = new Post();
        $post -> title = "Third post";
        $post -> body = "content is very good";
        $post -> save();
        return "successfully created";
    }

    public function addComment($id){

        $post = Post::find($id);

        $comment = new Comment();
        $comment -> comment = "First comment";

       
        $post -> comments() -> save($comment);
        return "successfully created";
    }

    public function getCommentByPost($id){
        $comment = Post::find($id)->comments;
        return $comment;
    }

    public function profile(){

        $phoneResult = Author::find(4) -> phoneFunction;  
      
        return $phoneResult;
    }
}
