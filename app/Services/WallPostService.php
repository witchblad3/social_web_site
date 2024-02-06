<?php

namespace App\Services;

use App\Models\WallPost;
use App\Models\WallPostRating;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WallPostService
{
    /**
     * Добавление в базу данных поста на стене пользователя
     *
     * @param array $attributes
     * @return Model
     */
    public function createWallPost(array $attributes): Model
    {
        $post = WallPost::query()
            ->create([
                'text' => $attributes['text'],
                'author_id' => Auth::id(),
                'wall_owner_id' => $attributes['wall_owner_id'],
                'likes_count' => 0,
                'dislikes_count' => 0,
            ]);

        return $post;
    }

    /**
     * Удаление поста из бд
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function deleteWallPost(Request $request): \Illuminate\Http\JsonResponse
    {
        // todo: тут надо провалидировать
        $postId = $request->get('id');
        $post = WallPost::query()->find($postId);
        if ($post->author_id != Auth::id()) {
            throw new \Exception("Вы не можете удалить эту запись");
        }

        $post->delete();

        return response()->json(['status' => 200]);
    }

    /**
     * Пометить пост как понравившийся
     *
     * @param $postId
     * @return \Illuminate\Database\Eloquent\HigherOrderBuilderProxy|\Illuminate\Support\HigherOrderCollectionProxy|mixed
     */
    public function likePost($postId): mixed
    {
        // todo: методы для лайков и дизлайков надо попробовать переделать, выглядят кринжово
        // наверняка есть способ сделать это красивее
        $post = WallPost::query()
            ->with(['liked_by_me'])
            ->findOrFail($postId);

        if (is_null($post->liked_by_me)) {
            $rating = new WallPostRating();
            $rating->createRating($post->id, true);
            $post->likes_count = $this->getCurrentLikesCount($post->id);
            $post->save();
            return $post->id;
        }

        $post->liked_by_me->delete();
        $post->likes_count = $this->getCurrentLikesCount($post->id);
        $post->save();

        return $post->id;
    }

    /**
     * Получение количества числа лайков у поста
     *
     * @param $postId
     * @return int
     */
    public function getCurrentLikesCount($postId): int
    {
        return WallPostRating::query()
            ->where('wall_post_id', $postId)
            ->where('is_like', true)
            ->count();
    }

    /**
     * Получение кол-ва дизлайков у поста
     *
     * @param $postId
     * @return int
     */
    public function getCurrentDislikesCount($postId): int
    {
        return WallPostRating::query()
            ->where('wall_post_id', $postId)
            ->where('is_like', false)
            ->count();
    }

    /**
     * Пометить пост как не понравившийся
     *
     * @param $postId
     * @return \Illuminate\Database\Eloquent\HigherOrderBuilderProxy|\Illuminate\Support\HigherOrderCollectionProxy|mixed
     */
    public function dislikePost($postId): mixed
    {
        $post = WallPost::query()
            ->with(['disliked_by_me'])
            ->find($postId);

        if (is_null($post->disliked_by_me)) {
            $rating = new WallPostRating();
            $rating->createRating($post->id, false);
            $post->dislikes_count = $this->getCurrentDislikesCount($post->id);
            $post->save();

            return $post->id;
        }
        $post->disliked_by_me->delete();
        $post->dislikes_count = $this->getCurrentDislikesCount($post->id);
        $post->save();

        return $post->id;
    }
}
