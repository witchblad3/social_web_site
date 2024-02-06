<?php

namespace App\Repositories;

use App\Models\WallPost;
use \Illuminate\Database\Eloquent\Collection;
use  \Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Builder;

class WallPostRepository
{
    public function getWallPostsByOwner(int $wallOwnerId, array $related = []): Collection|array
    {
        $posts = WallPost::query()
            ->where('wall_owner_id', '=', $wallOwnerId);


        if (!empty($related)) {
            $posts->with($related);
        }

        return $posts->latest()
            ->get();
    }

    public function getWallPostById(int $id, array $related = []): Model|Collection|Builder|array|null
    {
        $post = WallPost::query();

        if (!empty($related)) {
            $post->with($related);
        }

        return $post->find($id);
    }
}
