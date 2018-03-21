{{--<div class="container">--}}
    {{--<header class="header py-3">--}}
        {{--<div class="row flex-nowrap justify-content-between align-items-center">--}}
            {{--<div class="col-4 pt-1">--}}
                {{--<b><a class="blog-header-logo text-dark" href="/">ThuanBlog</a></b>--}}
            {{--</div>--}}
            {{--<div class="col-4 text-center">--}}
            {{--<a class="blog-header-logo text-dark" href="/">ThuanBlog</a>--}}
            {{--</div>--}}
            {{--<div class="col-4 d-flex justify-content-end align-items-center">--}}
                {{--<a class="text-muted" href="#">--}}
                    {{--<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"--}}
                         {{--stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"--}}
                         {{--class="mx-3">--}}
                        {{--<circle cx="10.5" cy="10.5" r="7.5"></circle>--}}
                        {{--<line x1="21" y1="21" x2="15.8" y2="15.8"></line>--}}
                    {{--</svg>--}}
                {{--</a>--}}
                {{--@if(Auth::check())--}}
                    {{--<div class="avatar">--}}
                        {{--{{ Auth::user()->name }}--}}
                    {{--</div>--}}
                {{--@else--}}
                    {{--<a class="btn btn-sm btn-secondary" href="/login">Sign up</a>--}}
                {{--@endif--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</header>--}}

    {{--<div class="nav-scroller py-1 mb-2">--}}
        {{--<nav class="nav d-flex justify-content-between">--}}
            {{--@foreach($channels as $channel)--}}
                {{--<a class="p-2 text-muted" href="/posts/{{ $channel->slug }}">{{ $channel->name }}</a>--}}
            {{--@endforeach--}}
        {{--</nav>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<hr>--}}


<nav id="mynav" class="navbar is-fixed-top">

    <div id="navbarExampleTransparentExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="/">
                Home
            </a>
            @foreach($channels as $channel)
                <a class="navbar-item" href="/posts/{{ $channel->slug }}">{{ $channel->name }}</a>
            @endforeach

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="/documentation/overview/start/">
                    Docs
                </a>
                <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item" href="/documentation/overview/start/">
                        Overview
                    </a>

                </div>
            </div>
        </div>
    </div>
</nav>