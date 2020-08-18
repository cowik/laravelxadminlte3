<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use Yajra\DataTables\Facades\DataTables;

class StudentsController extends Controller
{
    public function index(){
        $data = \App\Students::all();
        return view('students/students');
    }

    public function getstudents(Request $request){

        $query = $request->get('name');
        if($request->has('name') && $request->has('submit')){
            $students = \App\Students::select('students.*')
            ->where("name","ILIKE","%".$request->name."%");

            return Datatables::of($students)
                ->addColumn('action',function($s){
                    return '<a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="/students/'.$s->id.'/edit">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm delete" href="#" studentsid="'.$s->id.'">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>';
                })
            ->rawColumns(['action'])
            ->toJson();
        }
        else{
            $students = \App\Students::select('students.*');

            return Datatables::of($students)
            ->addColumn('action',function($s){
                return '<a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="/students/'.$s->id.'/edit">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm delete" href="#" studentsid="'.$s->id.'">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>';
            })
            ->rawColumns(['action'])
            ->toJson();
        }
    }

    public function insert(Request $request){
        \App\Students::create($request->all());
        return redirect('students')->with('success', 'Input Success !');
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

    public function search(Request $request) 
    {
        $query = $request->get('name');
        $data = \App\Students::select("name")
                ->where("name","ILIKE","%{$query}%");
   
        // return response()->json($data);
        return Datatables::of($data)->make(true);
    }
}
