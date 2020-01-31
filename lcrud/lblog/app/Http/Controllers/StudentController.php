<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Students::all();

        return view('welcome', compact('students'));
    }

    public function create() {
        return view('student.create');
    }

    public function store(Request $request) {
        $student = new Students();
        $args = [ 'successMsg' => 'Student successfully added!!' ];
        $student_validation = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ];

        $this->validate($request, $student_validation);

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();

        return redirect(route('student_home'))->with($args);
    }

    public function edit($id) {
        $student = Students::find($id);

        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id) {
        $student = Students::find($id);

        $args = [ 'successMsg' => 'Student successfully updated!!' ];
        $student_validation = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ];

        $this->validate($request, $student_validation);

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();

        return redirect(route('student_home'))->with($args);
    }

    public function delete($id) {
        $args = [ 'successMsg' => 'Student successfully deleted!!' ];
        Students::find($id)->delete();

        return redirect(route('student_home'))->with($args);
    }
}
