<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Client;

class LoginController extends Controller
{
    public function SignUp(UserRegisterRequest $request): JsonResponse
    {
        // todo: тут по результатам тестирования надо бы отрефакторить, смотреть тест testResgistration
        $attributes = $request->validated();
        if ($attributes['password'] != $attributes['password_confirm']) {
            return response()->json([
                'error' => true,
                'message' => "Пароли не совпадают"
            ], 302);
        }
        $attributes['password'] = Hash::make($attributes['password']);
        $user = User::query()
            ->create($attributes);
        return response()->json([
            'error' => false,
            'message' => "Registered!"
        ]);
    }


    /**
     * @throws \Exception
     */
    public function SignIn(Request $request): \Symfony\Component\HttpFoundation\Response
    {
        //todo: сделать тут валидацию
        $email = $request->get('email');
        $password = $request->get('password');
        $user = User::query()
            ->where('email', '=', $email)
            ->first();
        $passwordGrantClient = Client::query()
            ->where('password_client', 1)
            ->first();

        $data = [
            'grant_type' => 'password',
            'client_id' => $passwordGrantClient->id,
            'client_secret' => $passwordGrantClient->secret,
            'username' => $email,
            'password' => $password,
            'scope' => '*'
        ];

        $tokenRequest = Request::create('/oauth/token', 'post', $data);
        return app()->handle($tokenRequest);
    }
}
