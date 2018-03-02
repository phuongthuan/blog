@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
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


        {{ $post->body }}


        @if(count($post->comments))
            <hr>

            <div class="comments">
                <ul class="list-group">
                    @foreach($post->comments as $comment)
                        <li class="list-group-item">
                            <strong>
                                {{ $comment->created_at->diffForHumans() }} : &nbsp;
                            </strong>
                            {{ $comment->body }}
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
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
            @include('layouts.errors')
        </form>

    </div>


@endsection