<?php

namespace App;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    /**
     * Get path of post.
     *
     * @return string
     */
    public function path()
    {
        return "/posts/{$this->channel->slug}/{$this->id}";
    }

    /**
     * A post has many comments.
     *
     * @return HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Posts can belongs to a channel.
     *
     * @return BelongsTo
     */
    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }

    /**
     * A post belongs to many tags.
     *
     * @return BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    /**
     * Posts belongs to a user.
     *
     * @return BelongsTo
     */
    public function user() // $comment->post->user
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Add new comment.
     *
     * @param $comment
     */
    public function addComment($comment)
    {
        $this->comments()->create($comment);
    }

    /**
     * Filters posts by month and year.
     *
     * @param $query
     * @param $filters
     */
    public function scopeFilter($query, $filters)
    {
        if (isset($filters['month'])) {
            $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
        }

        if (isset($filters['year'])) {
            $query->whereYear('created_at', $filters['year']);
        }
    }

    /**
     * Get archivies posts.
     *
     * @return mixed
     */
    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }

}
