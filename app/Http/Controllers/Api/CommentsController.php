<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\WallPost;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function create(Request $request): JsonResponse
    {
        $post = WallPost::query()
            ->find($request->get('post_id'));
        // todo: тут сделать проверку прав и в реквест засунуть, чтобы проверить на нулл
        // todo: провалидировать текст там же
        $comment = Comment::query()
            ->create([
                'author_id' => Auth::id(),
                'post_id' => $post->id,
                'text' => $request->get('text'),
            ]);

        return response()->json(['success' => true, 'comment' => $comment]);
    }
}
