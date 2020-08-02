<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        $data = \App\Students::all();
        return view('students',['data' => $data]);
    }

    public function insert(Request $request){
        \App\Students::create($request->all());
        return redirect('/students')->with('success', 'Input Success !');
    }

    public function edit($id){
        $students = \App\Students::find($id);
        return view('editstudents' ,['students' => $students]);
    }

    public function update(Request $request, $id){
        $students = \App\Students::find($id);
        $students->update($request->all());
        return redirect('/students')->with('success', 'Update Success !');
    }

    public function delete($id){
        $students = \App\Students::find($id);
        $students->delete();
        return redirect('/students')->with('success', 'Delete Success !');
    }
}
