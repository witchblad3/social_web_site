<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'login'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function is_admin(): hasOne
    {
        return $this->hasOne(AdminUser::class, 'user_id', 'id');
    }

    public function avatar(): HasOne
    {
        return $this->hasOne(Picture::class, 'user_id', 'id')
            ->where('type', '=', 'avatar');
    }

    public function hat(): HasOne
    {
        return $this->hasOne(Picture::class, 'user_id', 'id')
            ->where('type', '=', 'hat');
    }

    public function createHat($file){
        $isPictureExists = Picture::query()
                ->where('user_id', $this->id)
                ->where('type', 'hat')
                ->count() > 0;
        if($isPictureExists){
            Auth::user()->hat()->delete();
        }

        $picture = new Picture();
        $originalName = $file->getClientOriginalName();
        $hashedName = $file->hashName();
        $extension = $file->getClientOriginalExtension();

        $picture->original_name = $originalName;
        $picture->extension = $extension;
        $picture->hashedName = $hashedName;
        $picture->user_id = Auth::id();
        $picture->type = "hat";
        $picture->save();

        $picture->hashedName = $picture->id . "_" . $hashedName;
        $path = Storage::putFileAs('/hats', $file, $picture->hashedName);
        $picture->path = "hats/".$picture->hashedName;
        $picture->save();
    }

    public function subscriptions(): HasManyThrough
    {
        return $this->hasManyThrough(User::class, Subscribe::class, 'user_id', 'id', 'id', 'to_id');
    }

    public function createAvatar($file)
    {
        // fixme
        $isAvatarExists = Picture::query()
                ->where('user_id', Auth::id())
                ->where('type', 'avatar')
                ->count() > 0;
        if ($isAvatarExists) {
            Auth::user()->avatar()->delete();
        }

        $picture = new Picture();
        $originalName = $file->getClientOriginalName();
        $hashedName = $file->hashName();
        $extension = $file->getClientOriginalExtension();

        $picture->original_name = $originalName;
        $picture->extension = $extension;
        $picture->hashedName = $hashedName;
        $picture->user_id = Auth::id();
        $picture->type = "avatar";
        $picture->save();

        $picture->hashedName = $picture->id . "_" . $hashedName;
//        $path = Storage::putFileAs('/avatars', $file, $picture->hashedName);
        $path = Storage::putFileAs('/avatars', $file, $picture->hashedName);
        $picture->path = "avatars/" . $picture->hashedName;
        $picture->save();
    }
}
