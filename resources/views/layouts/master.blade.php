@include('layouts.header')

@include('layouts.nav')

<div class="container">

    <div class="columns">

        <div class="column is-four-fifths">
            @yield('content')
        </div>

        <div class="column">
            @include('layouts.sidebar')
        </div>

    </div><!-- /.columns -->

</div><!-- /.container -->

@include('layouts.footer')

