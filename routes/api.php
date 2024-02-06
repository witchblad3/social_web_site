<?php

use App\Http\Controllers\Api;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['namespace' => 'App\Http\Controllers\Api', 'prefix' => '/api/v1'], function () {
    /* Registration and authentication */
    Route::post('/register', [Api\LoginController::class, 'SignUp'])->name('sign_up');
    Route::post('/auth', [Api\LoginController::class, 'SignIn'])->name('log_in');

    Route::middleware(['auth.api:api'])->group(function () {
        /* Профиль */
        Route::get('/profile/me', [Api\ProfileController::class, 'getCurrentUser']);
        Route::get('/profile/{id}', [Api\ProfileController::class, 'getUserById']);
        Route::post('/profile/update', [Api\ProfileController::class, 'updateUser']);
        Route::post('/profile/updateHat', [Api\ProfileController::class, 'updateHatUser']);

        /* Подписки */
        Route::post('/subscribe', [Api\ProfileController::class, 'subscribe']);

        /* создание поста на стену юзера */
        Route::post('/create_wall_post', [Api\WallPostController::class, 'createWallPost']);
        Route::patch('/delete_wall_post', [Api\WallPostController::class, 'deleteWallPost']);
        /*Возвращение постов на стену*/
        Route::get('/get_wall_posts/{profile_id}', [Api\WallPostController::class, 'getWallPosts']);
        /*Лайк поста*/
        Route::post('/like/{post_id}', [Api\WallPostController::class, 'likePost']);
        Route::post('/dislike/{post_id}', [Api\WallPostController::class, 'dislikePost']);
        /* Коммент на пост */
        Route::post('/post/comment', [Api\CommentsController::class, 'create']);

        /* Поиск */
        Route::get('/search/get_users', [Api\SearchController::class, 'search']);
    });
});

//Route::post("/test_web", [\App\Http\Controllers\TestController::class, "index"]);
