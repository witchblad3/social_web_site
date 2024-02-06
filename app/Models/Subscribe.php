<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Subscribe extends Model
{
    use HasFactory;
    protected $table = "subscribes";

    protected $fillable = [
        'user_id',
        'to_id'
    ];

    public static function exists($toId): bool
    {
        // todo: переделать потом на отношения
        $subscribe = Subscribe::query()
            ->where('user_id', Auth::id())
            ->where('to_id', $toId)
            ->count();
        return $subscribe > 0;
    }
}
