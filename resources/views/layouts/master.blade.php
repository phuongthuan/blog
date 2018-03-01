@include('layouts.header')

@include('layouts.nav')

<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">My Blog</h1>
        <p class="lead blog-description">Today a reader. Tomorrow a leader !</p>
    </div>
</div>

<div class="container">

    <div class="row">

        @yield('content')

        @include('layouts.sidebar')

    </div><!-- /.row -->

</div><!-- /.container -->

@include('layouts.footer')
