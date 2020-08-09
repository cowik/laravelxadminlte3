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

    public function getusers(){
        $users = \App\User::select('users.*');

        return \DataTables::eloquent($users)
        ->addColumn('action',function($s){
            return '<a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-folder">
                        </i>
                        View
                    </a>
                    <a class="btn btn-info btn-sm" href="/users/'.$s->id.'/edit">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm deleteuser" href="#" userid="'.$s->id.'">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>';
        })
        ->rawColumns(['action'])
        ->toJson();
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
