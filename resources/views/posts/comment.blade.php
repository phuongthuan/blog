<div class="box">
    <article class="media">
        <figure class="media-left">
            <p class="image is-48x48">
                <img src="/images/image1.jpg">
            </p>
        </figure>
        <div class="media-content">
            <div class="content">
                <div>
                    <strong>{{ $comment->user->name }}</strong>
                </div>
                <small>{{'@'. $comment->user->name }}</small>
                <small>{{ $comment->created_at->diffForHumans() }}</small>
                <p>
                    {{ $comment->body }}
                </p>
            </div>
            <nav class="level is-mobile">
                <div class="level-left">
                    <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-reply"></i></span>
                    </a>
                    <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                    </a>
                    <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-heart"></i></span>
                    </a>
                </div>
            </nav>
        </div>
    </article>
</div>
