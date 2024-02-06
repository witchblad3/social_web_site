<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use \Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class WallPost extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'text',
        'wall_owner_id',
        'author_id',
        'likes_count',
        'dislikes_count',
    ];

    protected $dates = ['deleted_at'];
    protected $table = "wall_posts";

    public function post_creator(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'author_id')
            ->with(['avatar']);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id', 'id')
            ->with(["comment_creator"]);
    }

    public function liked_by_me(): HasOne
    {
        return $this->hasOne(WallPostRating::class, 'wall_post_id', 'id')
            ->where('author_id', Auth::id())
            ->where('is_like', true);
    }

    public function disliked_by_me(): HasOne
    {
        return $this->hasOne(WallPostRating::class, 'wall_post_id', 'id')
            ->where('author_id', Auth::id())
            ->where('is_like', false);
    }
}
