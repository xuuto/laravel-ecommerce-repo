<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $latestProducts = Product::latest()->take(8)->get();
//        dd($products);
        $featuredProducts = Product::where('featured', 1)->take(3)->get();
        $featuredCategories = Category::where('featured', 1)->take(3)->get();
//        dd($featuredCategories);
        return view('site.pages.homepage', compact('latestProducts', 'featuredProducts', 'featuredCategories'));
    }

}
