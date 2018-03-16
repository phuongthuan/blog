<?php

namespace App\Providers;

use App\Channel;
use App\Post;
use App\Tag;
use Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.sidebar', function ($view) {
            $archives = Post::archives();
            $tags = Tag::has('posts')->pluck('name');
            $recents = Post::orderBy('created_at', 'desc')->take(5)->get();

            $view->with(compact('archives', 'tags', 'recents'));
        });

        View::composer('*', function($view) {
            $channels = Cache::rememberForever('channels', function() {
                return Channel::all();
            });
            $view->with(compact('channels'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
