<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\color;

use Illuminate\Http\Request;

class colorController extends Controller
{
    public function color()
    {
        $colors = color::all();

        return view('color/color', [
            'colors' => $colors,
        ]);
    }

    public function create()
    {
        return view('color/create');
    }

    public function store(Request $request)
    {
        $color = new color();

        $color->color_name = $request->color_name;
        $color->color_code = $request->color_code;
        $color->save();

        return redirect()->route('color');
    }

    public function update($id)
    {
        $brand = color::find($id);

        return view('brand/update', [
            'brand' => $brand,
        ]);
    }

    public function edit(Request $request)
    {
        $brand = brand::find($request->id);
        $brand->brand_name = $request->brand_name;
        $brand->save();

        return redirect()->route('brand');
    }

    public function delete($id)
    {
        $brand = brand::find($id);
        $brand->delete();

        return redirect()->route('brand');
    }
}