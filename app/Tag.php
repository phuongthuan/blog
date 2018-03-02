<?php

namespace App;


use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    /**
     * A tag can belongs to many posts.
     *
     * @return BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    /**
     * Convert tag id to name.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'name';
    }
}
