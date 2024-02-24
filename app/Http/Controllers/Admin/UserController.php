<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function index()  {
        return view('pages.admin.user.index',[
            'users' => User::where('role','Pengguna')->latest()->get(),
            'trashes' => User::where('role','Pengguna')->onlyTrashed()->get()
        ]);
    }

    function create()  {
        return view('pages.admin.user.create');
    }

    function store(StoreUserRequest $request)  {
        $request->validated();
        User::create([
            'name' => $request->nama,
            'role' => User::ROLE['User'],
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('master-user')->with('success', 'Data berhasil ditambahkan');
    }

    function edit(User $user) {
        return view('pages.admin.user.edit',compact('user'));
    }

    function update(UpdateUserRequest $request , User $user)  {
        $request->validated();
        $user->update([
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect()->route('master-user')->with('success', 'Data berhasil diubah!');
    }

    function destroy(User $user)  {
        $user->delete();
        return redirect()->route('master-user')->with('success', 'Data berhasil dihapus');
    }

    function restore(User $user)  {
        $user->restore();
        return redirect()->back()->with('success', 'Data berhasil dikembalikan!');
    }

    function forceDelete(User $user)  {
        $user->forceDelete();
        return redirect()->back()->with('success', 'Data berhasil dihapus permanen!');
    }
}
