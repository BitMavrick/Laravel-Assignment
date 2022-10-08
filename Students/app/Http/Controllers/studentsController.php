<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\Validator;

class studentsController extends Controller
{
    //
    public function students()
    {

        $students = student::all();

        return view('list', [
            'students' => $students
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        // Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required | min:3 | max:20',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        student::create([
            'name' => $request->name,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'hobby1' => $request->hobby1,
            'hobby2' => $request->hobby2,
            'hobby3' => $request->hobby3,
            'nationality' => $request->nationality
        ]);

        return redirect()->route('students');
    }

    public function update($id)
    {
        $student = student::find($id);

        return view('update', [
            'student' => $student,
        ]);
    }

    public function edit(Request $request)
    {
        $student = student::find($request->id);

        $data = [
            'name' => $request->name,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'hobby1' => $request->hobby1,
            'hobby2' => $request->hobby2,
            'hobby3' => $request->hobby3,
            'nationality' => $request->nationality,
        ];
        $student->update($data);

        return redirect()->route('students');
    }

    public function details($id)
    {

        $student = student::find($id);

        return view('details', [
            'all_info' => $student
        ]);
    }

    public function delete($id)
    {
        $student = student::find($id);
        $student->delete();

        return redirect()->route('students');
    }
}