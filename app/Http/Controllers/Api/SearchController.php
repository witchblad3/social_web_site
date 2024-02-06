<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserCollection;
use App\Models\Subscribe;
use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Database\Eloquent\Model;

class SearchController extends MainApiController
{
    /** @var Subscribe */
    protected Model $model;

    public function __construct(Request $request, Subscribe $subscribe)
    {
        parent::__construct($request, $subscribe);
    }

    public function search(Request $request): UserCollection
    {
        $value = $request->get('search_text');
        $users = User::query()
            ->with(['avatar'])
            ->withCount(['is_admin as is_admin'])
            ->whereRaw("concat(first_name, ' ', last_name) LIKE '%{$value}%'")
            ->orWhere('login', 'like', '%' . $value . '%')
            ->orderBy('first_name')
            ->orderBy('last_name')
            ->get();

        return new UserCollection($users);
    }
}
