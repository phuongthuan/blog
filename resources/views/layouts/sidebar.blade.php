<aside class="col-md-4 blog-sidebar">
    <div class="p-3 mb-3 bg-light rounded">
        <h4 class="font-weight-bold">Recent Posts</h4>
        <ol class="list-unstyled mb-0">
            @foreach($recents as $recent)
                <li>
                    <a class="text-dark" href="/posts/{{ $recent->id }}">
                        {{ $recent->title }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>

    <div class="p-3">
        <h4 class="font-weight-bold">Archives</h4>
        <ol class="list-unstyled mb-0">
            @foreach($archives as $stats)
                <li>
                    <a class="text-dark" href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                        {{ $stats['month'] . ' ' . $stats['year'] }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>

    <div class="p-3">
        <h4 class="font-weight-bold">Tags</h4>
        <ol class="list-unstyled">
            @foreach($tags as $tag)
                <li>
                    <a class="text-dark" href="/posts/tags/{{ $tag }}">
                        {{ $tag }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>

    <div class="p-3">
        <h4 class="font-weight-bold">Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a class="text-dark" href="https://github.com/thuannp95">GitHub</a></li>
            <li><a class="text-dark" href="https://twitter.com/thuannp95">Twitter</a></li>
            <li><a class="text-dark" href="https://www.facebook.com/thuannp95">Facebook</a></li>
        </ol>
    </div>
</aside><!-- /.blog-sidebar -->