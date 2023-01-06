<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.dashboard.user.user', [
            'title' => 'User',
            'users' => User::where('id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // return $user;

        return view('layouts.dashboard.user.userShow', [
            'title' => 'Detail Profile',
            'detail' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (
            $user->id !== auth()->user()->id
        ) {
            abort(403);
        }

        return view('layouts.dashboard.user.edit', [
            'title' => 'Edit Profile',
            'userEdit' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:50',
            'username' => 'required|max:50',
            'slug' => 'required|max:50',
            'password' => 'required|max:256'
        ];

        if ($request->slug != $user->slug) {
            $rules['slug'] = 'required|unique:users';
        }

        $validateData['password'] = bcrypt($rules['password']);

        $validateData = $request->validate($rules);

        // $validateData['user_id'] = auth()->user()->id;

        User::where('id', $user->id)->update($validateData);

        return redirect('/dashboard/user')->with('success', 'New user has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/dashboard/user')->with('success', 'user has been deleted!');
    }
}
