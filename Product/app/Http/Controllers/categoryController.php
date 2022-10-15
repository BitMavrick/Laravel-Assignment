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
        $category = category::find($id);
        $brands = brand::all();
        $colors = color::all();

        return view('category/update', [
            'category' => $category,
            'brands' => $brands,
            'colors' => $colors,
        ]);
    }

    public function edit(Request $request)
    {
        $this->session();
        $category = category::find($request->id);
        $category->category_name = $request->category_name;
        $category->brand_id = $request->brand_id;
        $category->color_id = $request->color_id;

        $category->save();

        return redirect()->route('category');
    }

    public function delete($id)
    {
        $this->session();
        $category = category::find($id);
        $category->delete();

        return redirect()->route('category');
    }
}