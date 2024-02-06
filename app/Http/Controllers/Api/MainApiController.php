<?php

namespace App\Http\Controllers\Api;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

abstract class MainApiController extends Controller
{
    protected Request $request;
    protected Model $model;

    // todo: тут надо сделать класс в хелперах, чтобы можно было возвращать коды 200, 400 и тд
    public function __construct(Request $request, Model $model)
    {
        $this->model = $model;
        $this->request = $request;
    }

    public function getCurrentUser(): ?\Illuminate\Contracts\Auth\Authenticatable
    {
        return Auth::check() ?  Auth::user() : null;
    }

    public function isAuth(): bool
    {
        return Auth::check();
    }
}
