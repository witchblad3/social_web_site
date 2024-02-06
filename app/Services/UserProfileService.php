<?php

namespace App\Services;

use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Hash;

class UserProfileService
{
    public function updateUserData(Request $request)
    {
        //todo:: отрефакторить это срочно
        $date = $request->get('birth_date', null);
        $file = $request->file('avatar', null);
        $currentUser = User::query()
            ->find(Auth::id());
        $currentUser->first_name = $request->get('first_name');
        $currentUser->last_name = $request->get('last_name');
        $currentUser->login = $request->get('login');
        $currentUser->email = $request->get('email');
        if (!is_null($date) && intval($date) != 0) {
            $currentUser->birth_date = Carbon::parse($date)->format('Y-m-d');
        }
        if (is_null($file) == false) {
            $currentUser->createAvatar($file);
        }
        $description = trim($request->get('description', ""));
        if (!empty($description)){
            $currentUser->about = $description;
        }
        $currentUser->first_name = $request->get('first_name');
        $password = $request->get('password');
        $secondPassword = $request->get('password_confirm');
        if (!is_null($password) && !is_null($secondPassword)) {
            $this->updateUserPassword($currentUser, $password, $secondPassword);
        }
        $currentUser->save();

        $currentUser->avatar = $currentUser->avatar()->first();
        return $currentUser;
    }

    public function updateUserPassword(&$user, ?string $password, ?string $secondPassword): void
    {
        // todo: не забыть протестить
        if ($password != $secondPassword) {
            throw new Exception("Password doesnt match");
        }
        $user->password = Hash::make($password);
    }

    public function updateUserHat($file)
    {
        $user = Auth::user();
        $user->createHat($file);

        return $user->hat()->first();
    }
}
