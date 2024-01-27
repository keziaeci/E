<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserProfileRequest;
use App\Models\User;

class UserProfileController extends Controller
{
    function index()  {
        return view('pages.profile.index');
    }

    function update(UpdateUserProfileRequest $request, User $user) {
        $credentials = $request->validated();
        // dd($user);
        $user->update($credentials);

        return redirect()->back();
    }
}
