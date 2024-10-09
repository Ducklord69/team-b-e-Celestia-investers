<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Manual;

class BrandController extends Controller
{
    // Existing method to show a specific brand and its manuals
    public function show($brand_id, $brand_slug)
    {
        $brand = Brand::findOrFail($brand_id);
        $manuals = Manual::where('brand_id', $brand_id)->get();

        return view('pages.manual_list', [
            'brand' => $brand,
            'manuals' => $manuals
        ]);
    }

    public function index(Request $request)
    {
        $selectedLetter = $request->input('letter', null);
        $brands = Brand::all(); // Fetch all brands
    
        return view('brands.index', [
            'brands' => $brands,
            'selectedLetter' => $selectedLetter,
        ]);
    }
    
}
