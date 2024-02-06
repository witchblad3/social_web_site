<?php

namespace App\Services;

use App\Models\Subscribe;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Http\JsonResponse;

class SubscribeService
{
    public function subscribeToUser($subscribeToId): JsonResponse
    {
        if(is_null($subscribeToId)){
            // fixme тут должно быть типа return $response->badRequest();
            // или вообще дропнуть исключение
            return response()->json(['message' => "ошибка подписки"], 404);
        }

        if(Subscribe::exists($subscribeToId)){
            return response()->json(['message' => "уже подписан"], 404);
        }

        Subscribe::query()->create([
            'user_id' => Auth::id(),
            'to_id' => $subscribeToId,
        ]);

        return response()->json(['message' => "ok"], 200);
    }
}
