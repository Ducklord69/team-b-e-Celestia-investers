<?php

use Illuminate\Support\Facades\Route;
use App\Models\Brand;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\ContactController;

// Route for the homepage
Route::get('/', function () {
    $brands = Brand::all()->sortBy('name');
    return view('pages.homepage', compact('brands'));
})->name('home');

// Route for the contact page
Route::get('/contact', function () {
    $brands = Brand::all()->sortBy('name');
    return view('pages.contact', compact('brands'));
})->name('contact');

Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');
Route::get('/brands/{letter}', [BrandController::class, 'index'])->name('brands.index');

Route::get('/manual', function () {
    return view('pages.manual_view');
});

// Route for handling the contact form submission
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Redirect routes
Route::get('/manual/{language}/{brand_slug}/', [RedirectController::class, 'brand']);
Route::get('/manual/{language}/{brand_slug}/brand.html', [RedirectController::class, 'brand']);
Route::get('/datafeeds/{brand_slug}.xml', [RedirectController::class, 'datafeed']);

// Locale routes
Route::get('/language/{language_slug}/', [LocaleController::class, 'changeLocale']);

// List of manuals for a brand
Route::get('/{brand_id}/{brand_slug}/', [BrandController::class, 'show']);

// Detail page for a manual
Route::get('/{brand_id}/{brand_slug}/{manual_id}/', [ManualController::class, 'show']);

// Generate sitemaps
Route::get('/generateSitemap/', [SitemapController::class, 'generate']);
