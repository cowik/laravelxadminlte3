<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
        $data = \App\User::all();
        return view('users/users',['data' => $data]);
    }

    public function insert(Request $request){
        $user = new \App\User;
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();

        return redirect('/users')->with('success', 'Input Success !');
    }

    public function edit(User $user){
        return view('users/edituser' ,['user' => $user]);
    }

    public function update(Request $request, User $user){
        $user->update($request->all());
        return redirect('/users')->with('success', 'Update Success !');
    }

    public function delete(User $user){
        $users->delete();
        return redirect('/users')->with('success', 'Delete Success !');
    }

}
