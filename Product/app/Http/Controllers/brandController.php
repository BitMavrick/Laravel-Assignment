<?php

namespace App\Http\Controllers;

use App\Models\brand;

use Illuminate\Http\Request;

class brandController extends Controller
{
    public function brand()
    {
        $brands = brand::all();

        return view('brand', [
            'brands' => $brands,
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $brand = new brand();
        $brand->brand_name = $request->brand_name;
        $brand->save();

        return redirect()->route('brand');
    }
}