<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentsController extends Controller
{
    //
    public function students()
    {
        return view('list');
    }

    public function create()
    {
        return view('create');
    }
}