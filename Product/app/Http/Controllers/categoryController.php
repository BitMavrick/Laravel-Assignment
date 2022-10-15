<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\color;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function session()
    {
        session_start();
        $_SESSION['option'] = 'category';
    }

    public function color()
    {
        $this->session();

        $category = category::all();

        return view('category/category', [
            'categories' => $category,
        ]);
    }

    public function create()
    {
        $this->session();
        return view('color/create');
    }

    public function store(Request $request)
    {
        $this->session();
        $color = new color();

        $color->color_name = $request->color_name;
        $color->color_code = $request->color_code;
        $color->save();

        return redirect()->route('color');
    }

    public function update($id)
    {
        $this->session();
        $color = color::find($id);

        return view('color/update', [
            'color' => $color,
        ]);
    }

    public function edit(Request $request)
    {
        $this->session();
        $color = color::find($request->id);
        $color->color_name = $request->color_name;
        $color->color_code = $request->color_code;

        $color->save();

        return redirect()->route('color');
    }

    public function delete($id)
    {
        $this->session();
        $color = color::find($id);
        $color->delete();

        return redirect()->route('color');
    }
}