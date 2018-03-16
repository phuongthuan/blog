<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Channel $channel
     * @return Response
     */
    public function index(Channel $channel)
    {
        if ($channel->exists) {
            $posts = $channel->posts()->latest()->paginate(5);
        }else {
            $posts = Post::latest()
                ->filter(request()->only(['month', 'year']))
                ->paginate(5);
        }

        $recents = Post::orderBy('created_at', 'desc')->take(5)->get();

        $archives =  Post::archives();

        return view('posts.index', compact('posts', 'archives', 'recents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return RedirectResponse|Redirector
     */
    public function store()
    {
        $this->validate(request(), [
           'title' => 'required',
           'body' => 'required'
        ]);

        auth()->user()->publish(new Post(request(['title', 'body'])));

        session()->flash('message', 'Your post has been now published!');

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param Channel $channel
     * @param Post $post
     * @return Response
     */
    public function show(Channel $channel, Post $post)
    {
        return view('posts.show', [
            'post' => $post,
            'comments' => $post->comments()->paginate(5),
        ]);
    }
}
