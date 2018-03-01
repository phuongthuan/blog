<?php

namespace App;


use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    /**
     * @return HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * @return BelongsTo
     */
    public function user() // $comment->post->user
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @param $body
     */
    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

}
