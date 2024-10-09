<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Manual;

class ManualController extends Controller
{
    public function show($brand_id, $brand_slug, $manual_id)
    {
        // Find the brand and manual by ID
        $brand = Brand::findOrFail($brand_id);
        $manual = Manual::findOrFail($manual_id);

        // Increment the views column for the manual
        $manual->increment('views');

        // Pass the manual, brand, and views count to the view
        return view('pages.manual_view', [
            'manual' => $manual,
            'brand' => $brand,
        ]);
    }
}

?>
