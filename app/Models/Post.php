<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory;

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function vote(): MorphOne
    {
        return $this->morphOne(Vote::class, 'voteable');
    }

    public function comments(): MorphToMany
    {
        return $this->morphToMany(Comment::class, 'commentable');
    }
}
