<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('frontend.posts.index', compact('posts'));
    }
/*    public function show($slug)
    {
        $post = Post::where('slug','=', $slug)->first();
        return view('frontend.posts.show', compact('post'));
    }*/
    public function show($slug)
    {

        // le slug courant
        $post = Post::where('slug','=', $slug)->first();

        // le post précédant le post id
        $previous = Post::where('id', '<', $post->id)->first();

        // next post id
        $next = Post::where('id', '>', $post->id)->first();

        return view('frontend.posts.show',[
            'post' => $post,
            'previous' => $previous,
            'next' => $next
        ]);

/*        return View::make('frontend.posts.show')->with('previous', $previous)->with('next', $next);*/
    }
}
