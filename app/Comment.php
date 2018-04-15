<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    /**
     * Comments can belongs to a post.
     *
     * @return BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Comments can belongs to a user.
     *
     * @return BelongsTo
     */
    public function user() // $comment->user->name
    {
        return $this->belongsTo(User::class);
    }
}
