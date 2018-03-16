<aside class="menu">

    <h4 class="font-weight-bold">
        Recent Posts
    </h4>
    <ul class="list-unstyled mb-0">
        @foreach($recents as $recent)
            <li>
                <a href="{{ $recent->path() }}">
                    {{ $recent->title }}
                </a>
            </li>
        @endforeach
    </ul>

    <br>

    <h4 class="font-weight-bold">
        Archives
    </h4>
    <ul class="list-unstyled mb-0">
        @foreach($archives as $stats)
            <li>
                <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                    {{ $stats['month'] . ' ' . $stats['year'] }}
                </a>
            </li>
        @endforeach
    </ul>

    <br>

    <h4 class="font-weight-bold">
        Tags
    </h4>
    <ul class="list-unstyled">
        @foreach($tags as $tag)
            <li>
                <a href="/posts/tags/{{ $tag }}">
                    {{ $tag }}
                </a>
            </li>
        @endforeach
    </ul>

    <br>

    <h4 class="font-weight-bold">
        Elsewhere
    </h4>
    <ul class="list-unstyled">
        <li><a href="https://github.com/thuannp95">GitHub</a></li>
        <li><a href="https://twitter.com/thuannp95">Twitter</a></li>
        <li><a href="https://www.facebook.com/thuannp95">Facebook</a></li>
    </ul>

</aside>