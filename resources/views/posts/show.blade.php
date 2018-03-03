@extends('layouts.master')

@section('content')
        <h1>{{ $post->title }}</h1>

        @if(count($post->tags))
            <ul>
                @foreach($post->tags as $tag)
                    <li>
                        <a href="/posts/tags/{{  $tag->name}}">
                            {{ $tag->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif

        <p class="blog-post-meta">
            {{ $post->created_at->toFormattedDateString() }} by
            <a href="#"> {{ $post->user->name }}</a>
        </p>

        {{ $post->body }}


        @if(count($post->comments))
            <hr>

            <div class="comments">
                <ul class="list-group">
                    @foreach($post->comments as $comment)
                        <li class="list-group-item">
                            <b><a href="#" class="text-dark">
                                    {{ $comment->user->name }}</a></b>
                            : &nbsp;
                            {{ $comment->body }}
                            <strong>
                                {{ $comment->created_at->diffForHumans() }}
                            </strong>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Add a comment --}}
        <hr>

        <form method="POST" action="/posts/{{ $post->id }}/comments">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea class="form-control" name="body" placeholder="Your comment here.."></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-secondary">Add Comment</button>
            </div>
            @include('layouts.errors')
        </form>

@endsection