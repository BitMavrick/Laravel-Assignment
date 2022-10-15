<?php

namespace App\Http\Controllers;

use App\Models\brand;

use Illuminate\Http\Request;

class brandController extends Controller
{
    public function brand()
    {
        $brands = brand::all();

        return view('brand/brand', [
            'brands' => $brands,
        ]);
    }

    public function create()
    {
        return view('brand/create');
    }

    public function store(Request $request)
    {
        $brand = new brand();
        $brand->brand_name = $request->brand_name;
        $brand->save();

        return redirect()->route('brand');
    }

    public function update($id)
    {
        $brand = brand::find($id);

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