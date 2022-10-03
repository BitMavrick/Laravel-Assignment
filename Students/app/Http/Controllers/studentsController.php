<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

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
        //dd($request->all());

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

    public function details($id)
    {

        $student = student::find($id);

        return view('details', [
            'all_info' => $student
        ]);
    }
}