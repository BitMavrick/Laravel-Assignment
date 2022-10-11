<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;

// Command: composer require barryvdh/laravel-dompdf

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

        // Validator while creating a new student
        $validator = Validator::make($request->all(), [
            'name' => 'required | min:3 | max:20',
            'birth_date' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
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

        //Validator while updating a student
        $validator = Validator::make($request->all(), [
            'name' => 'required | min:3 | max:20',
            'birth_date' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

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

    public function trash()
    {
        $students = student::onlyTrashed()->get();

        return view('trash', [
            'students' => $students
        ]);
    }

    public function restore($id)
    {
        $student = student::onlyTrashed()->find($id);
        $student->restore();

        return redirect()->route('students');
    }

    public function clear($id)
    {
        $student = student::onlyTrashed()->find($id);
        $student->forceDelete();

        return redirect()->route('student.trash');
    }

    public function download()
    {

        $students = student::all();

        $pdf = Pdf::loadView('pdf', compact('students'));
        return $pdf->download('students.pdf');
    }
}