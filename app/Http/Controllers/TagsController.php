<?php

namespace App\Http\Controllers;


use App\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class TagsController extends Controller
{
    /**
     * Display post based on tag.
     *
     * @param Tag $tag
     * @return Factory|View
     */
    public function index(Tag $tag)
    {
        $posts = $tag->posts;

        return view('posts.index', compact('posts'));
    }
}
