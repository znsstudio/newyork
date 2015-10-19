<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileFormRequest;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ProfileFormRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileFormRequest $request)
    {
        $user = \App\User::find(\Auth::user()->id);
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return view('auth.msg');
    }

}
