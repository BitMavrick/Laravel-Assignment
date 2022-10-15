<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\color;
use App\Models\category;



use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function session()
    {
        session_start();
        $_SESSION['option'] = 'category';
    }

    public function category()
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

        $brands = brand::all();
        $colors = color::all();
        return view('category/create', [
            'brands' => $brands,
            'colors' => $colors,
        ]);
    }

    public function store(Request $request)
    {
        $this->session();
        $category = new category();

        $category->category_name = $request->category_name;
        $category->brand_id = $request->brand_id;
        $category->color_id = $request->color_id;
        $category->save();

        return redirect()->route('category');
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