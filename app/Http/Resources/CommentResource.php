<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'comment_creator' => (new UserResource($this->comment_creator)),
            'id' => $this->id,
            'text' => $this->text,
            'created_at' => $this->created_at,
        ];
    }
}
