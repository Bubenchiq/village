<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfile;
use App\Models\User;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('web.profile.show', compact('user'));
    }
    public function edit()
    {
        return view('web.profile.edit', ['user' => auth()->user()]);
    }

    /**
     * @param UpdateProfile $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateProfile $request)
    {
        auth()->user()->update(['nickname' => $request->get('nickname')]
            + ($request->get('password') ? ['password' => bcrypt($request->get('password'))] : [])
        );


        return redirect()->route('web.profile.edit')
            ->with('info', 'Your profile has been updated successfully.');
    }

}
