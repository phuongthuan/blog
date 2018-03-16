<div class="blog-post">
    <h2 class="blog-post-title">
        <a class="title is-3 is-spaced" href="{{ $post->path() }}">{{ $post->title }}</a>
    </h2>
    <p class="blog-post-meta">
        {{ $post->created_at->toFormattedDateString() }} by
        <a href="#"> {{ $post->user->name }}</a>
    </p>

    {{ $post->body }}
</div><!-- /.blog-post -->
