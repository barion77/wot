<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $categories_ru = Category::where('main_cat', 0)->get();
        $categories_eu = Category::where('main_cat', 1)->get();
        $categories_blitz = Category::where('main_cat', 2)->get();

        return view('index', compact('categories_ru', 'categories_eu', 'categories_blitz'));
    }
}
