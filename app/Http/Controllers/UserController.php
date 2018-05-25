<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        //solo usuario logeado
        $this->middleware('auth');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $usuario= User::find($user->id);
        return view('user.show',  ['user' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $usuario= User::find($user->id);
        return view('user.edit',  ['user' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $usuario= User::find($user->id);
        $usuario->update(['name'=>$request['name'],
        'email' =>$request['email']]);
        return view('user.show',  ['user' => $usuario]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    //pensar mejor solucion?
    public function destroy(User $user)
    {
        $usuario= User::find($user->id)->delete();
        return  redirect('/');
    }
}
