@extends('layouts.master')

@section('content')

        <h1 class="title">{{ $post->title }}</h1>

        @if(count($post->tags))
            <ul>
                @foreach($post->tags as $tag)
                    <li class="tag is-rounded">
                        <a href="/posts/tags/{{  $tag->name}}">
                            {{ $tag->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif

        <div class="content">
            <p class="blog-post-meta">
                {{ $post->created_at->toFormattedDateString() }} by
                <a href="#"> {{ $post->user->name }}</a>
            </p>
            {{ $post->body }}
        </div>

        <br>

        @foreach($comments as $comment)
            @include('posts.comment')
            <br>
        @endforeach

        {{ $comments->links() }}




        {{-- Add a comment --}}
        <br>

        <form method="POST" action="/posts/{{ $post->id }}/comments">
            {{ csrf_field() }}

            <article class="media">
                <figure class="media-left">
                    <p class="image is-64x64">
                        <img src="/images/image3.jpg">
                    </p>
                </figure>
                <div class="media-content">
                    <div class="field">
                        <p class="control">
                            <textarea id="mybox" name="body" class="textarea" placeholder="Add a comment..."></textarea>
                        </p>
                    </div>
                    <nav class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <button type="submit" id="mybtn" class="button">Leave comment</button>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <label class="checkbox">
                                    <input type="checkbox"> Press enter to submit
                                </label>
                            </div>
                        </div>
                    </nav>
                </div>
            </article>

            @include('layouts.errors')

        </form>
        <br>
@endsection