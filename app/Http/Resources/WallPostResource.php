<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WallPostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'text' => $this->text,
            'dislikes_count' => $this->dislikes_count,
            'likes_count' => $this->likes_count,
            'post_creator' => (new UserResource($this->post_creator)),
            'liked_by_me' => !is_null($this->liked_by_me),
            'disliked_by_me' => !is_null($this->disliked_by_me),
            'comments' => (new CommentCollection($this->comments)),
        ];
    }
}
