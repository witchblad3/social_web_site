<?php

namespace App\Http\Resources;

use App\Helpers\Resources\Images\Avatar;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'birth_date' => $this->birth_date,
            'created_at' => $this->created_at,
            'email' => $this->email,
            'login' => $this->login,
            'description' => $this->about,
            'avatar' => (new Avatar($this->avatar))->toResponse(),
            'hat' => (new Avatar($this->hat))->toResponse(),
            'is_verified' => $this->is_verified,
            'is_admin' => $this->is_admin,
            'subscriptions_count' => $this->subscriptions_count ?? 0,
            'i_am_subscribed' => $this->i_am_subscribed ?? false
        ];
    }
}
