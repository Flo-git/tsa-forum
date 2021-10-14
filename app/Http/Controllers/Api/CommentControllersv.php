<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Request $request){
        // 1- $request recup ses valeurs-------------------------------------
        $message = $request->input('message');
        $post_id = $request->input('post_id');
        $comment_id = $request->input('comment_id');

        /* le dernier commentaire du meme post est il du meme utiisateur (risque de robot)*/
        /*$lastComment = Comment::where()([
            [['post_id', '=', $request->user()->id]]
            ])->last();
        if ($lastComment->user_id == $request->user(id)){
            return false ;
        }*/
        if(!empty($message) && !empty('post-id')) {
            // 2- créer un comment -------------------------------------------
            $comment = new Comment ;
            // 3- Assigner le commentaire à l'utilisateur grace au syst de passport---------
            $comment->content= $message  ;
            $comment->post_id = $post_id ;
            if ($comment_id){
                $comment->comment_id = $comment_id;
            }
            $comment->user_id = $request->user()->id;
            $comment->save() ;
            // 4 return ok ou nok---------------------------------------------
            return true;
        }
        return false;
    }
}
