<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserProfileRequest;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    function index()  {

        $buku = Peminjaman::where('user_id', Auth::user()->id)->status(request('status'))->get();

        if (request('status') == 'Semua') {
            $buku = Auth::user()->peminjamans;
        }
        
        return view('pages.profile.index', [
            // 'bukus' => Auth::user()->peminjamans->status(request('status'))
            'bukus' => $buku
        ]);
    }

    function edit() {
        return view('pages.profile.edit');
    }
    function update(UpdateUserProfileRequest $request, User $user) {
        $credentials = $request->validated();

        $user->update($credentials);

        return redirect()->back();
    }
}
