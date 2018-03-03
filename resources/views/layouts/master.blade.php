@include('layouts.header')

<div class="container">
    @include('layouts.nav')
</div>


<main role="main" class="container">
    <div class="row">
        @include('layouts.slider')

        <div class="col-md-8 blog-main">

            @yield('content')

        </div><!-- /.blog-main -->

        @include('layouts.sidebar')

    </div><!-- /.row -->

</main><!-- /.container -->

@include('layouts.footer')

