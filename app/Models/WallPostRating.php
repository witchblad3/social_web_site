<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class WallPostRating extends Model
{
    use HasFactory;

    protected $table = 'wall_post_rating';
    public $timestamps = false;

    public function createRating($wall_post_id, $is_like)
    {
        $this->author_id = Auth::id();
        $this->wall_post_id = $wall_post_id;
        $this->is_like = $is_like;
        $this->save();
    }
}
