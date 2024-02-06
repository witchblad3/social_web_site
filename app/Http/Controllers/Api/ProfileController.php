<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Resources\Images\Avatar;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use \App\Models\User;
use App\Services\SubscribeService;
use App\Services\UserProfileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Http\JsonResponse;

class ProfileController extends Controller
{
    public function getCurrentUser(): UserResource
    {
        // todo: переделать определение админа, можно сделать изящнее
        $currentUser = User::query()
            ->withCount(['is_admin as is_admin'])
            ->with(['avatar', 'hat'])
            ->where('id', Auth::id())
            ->withCount(['is_admin as is_admin', 'subscriptions as subscriptions_count'])
            ->first();

        return new UserResource($currentUser);
    }

    public function updateUser(Request $request, UserProfileService $service): JsonResponse
    {
        $updatedUser = $service->updateUserData($request);
        return response()->json(['user' => $updatedUser]);
    }

    public function updateHatUser(Request $request, UserProfileService $service): JsonResponse
    {
        $file = $request->file('hat', null);
        if (!is_null($file)) {
            $hat = $service->updateUserHat($file);
            return response()->json(['data' => (new Avatar($hat))->toResponse()]);
        }

        return response()->json(['data' => null]);
    }

    public function getUserById($id): UserResource
    {
        $user = User::query()
            ->with(['avatar'])
            ->withCount(['is_admin as is_admin', 'subscriptions as subscriptions_count'])
            ->find($id);
        $user->i_am_subscribed = Auth::user()
                ->subscriptions()
                ->where('to_id', $id)
                ->count() > 0;

        return new UserResource($user);
    }

    public function subscribe(Request $request, SubscribeService $service): JsonResponse
    {
        $subscribeToId = $request->get('user_id', null);
        return $service->subscribeToUser($subscribeToId);
    }
}
