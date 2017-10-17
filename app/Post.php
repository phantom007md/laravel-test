<?php

namespace App;

class Post extends Model
{

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->blongsTo(User::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

}
