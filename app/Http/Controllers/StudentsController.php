<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class StudentsController extends Controller
{
    public function index(){
        $data = \App\Students::all();
        return view('students/students',['data' => $data]);
    }

    public function insert(Request $request){
        \App\Students::create($request->all());
        return redirect('students/students')->with('success', 'Input Success !');
    }

    public function edit(Students $students){
        return view('students/editstudents' ,['students' => $students]);
    }

    public function update(Request $request, Students $students){
        $students->update($request->all());
        return redirect('/students')->with('success', 'Update Success !');
    }

    public function delete(Students $students){
        $students->delete();
        return redirect('/students')->with('success', 'Delete Success !');
    }
}
