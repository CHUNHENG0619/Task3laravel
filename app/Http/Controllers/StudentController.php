<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        return view('student.login');
    }

    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->input('name');
        $student->password = $request->input('password');
        $student->save();
        
    }
    public function index()
    {
        $student = Student::all();
        return view('student.index', compact('student'));
    }
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->password = $request->input('password');
        $student->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->back()->with('status','Student Deleted Successfully');
    }
}