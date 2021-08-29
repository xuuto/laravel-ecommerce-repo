<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.pages.homepage');
    }

}
