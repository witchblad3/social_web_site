<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasOne;

class Comment extends Model
{
    use HasFactory;

    protected $table = "comments";

    protected $fillable = [
        'author_id', 'post_id', 'text',
    ];

    public function comment_creator(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'author_id');
    }
}
