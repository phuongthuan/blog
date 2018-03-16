@extends('layouts.master')

@section('content')

        @foreach($posts as $post)
            @include('posts.post')
        @endforeach

        @if($posts->count() > 5)
            <nav class="blog-pagination">
                <a class="btn btn-outline-secondary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>
        @endif

@endsection


