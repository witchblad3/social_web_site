<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\WallPostRequest;
use App\Http\Resources\WallPostCollection;
use App\Http\Resources\WallPostResource;
use App\Models\WallPost;
use App\Repositories\WallPostRepository;
use App\Services\WallPostService;
use Illuminate\Http\Request;

class WallPostController extends Controller
{
    private WallPostRepository $wallPostRepository;

    public function __construct(WallPostRepository $wallPostRepository)
    {
        $this->wallPostRepository = $wallPostRepository;
    }

    public function createWallPost(WallPostRequest $request, WallPostService $service): WallPostResource
    {
        $attributes = $request->validated();
        $wallpost = $service->createWallPost($attributes);

        return new WallPostResource($wallpost);
    }

    public function deleteWallPost(Request $request, WallPostService $service): \Illuminate\Http\JsonResponse
    {
        return $service->deleteWallPost($request);
    }

    public function getWallPosts($wallOwnerId): WallPostCollection
    {
        $related = ["comments", "post_creator"];
        $posts = $this->wallPostRepository->getWallPostsByOwner($wallOwnerId, $related);

        return new WallPostCollection($posts);
    }

    public function getWallPostById($id): WallPostResource
    {
        $post = WallPost::query()
            ->with(['post_creator', 'liked_by_me', 'disliked_by_me'])
            ->find($id);

        return new WallPostResource($post);
    }

    public function likePost($postId, WallPostService $service): WallPostResource
    {
        $postId = $service->likePost($postId);
        $post = $this->wallPostRepository->getWallPostById($postId, ['post_creator', 'liked_by_me', 'disliked_by_me']);

        return new WallPostResource($post);
    }

    public function dislikePost($postId, WallPostService $service): WallPostResource
    {
        $postId = $service->dislikePost($postId);
        $post = $this->wallPostRepository->getWallPostById($postId, ['post_creator', 'liked_by_me', 'disliked_by_me']);

        return new WallPostResource($post);
    }
}
