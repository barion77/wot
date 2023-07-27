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
        $categories_ru = Category::where('main_cat', 0)->orderBy('weight', 'DESC')->get();
        $categories_eu = Category::where('main_cat', 1)->orderBy('weight', 'DESC')->get();
        $categories_blitz = Category::where('main_cat', 2)->orderBy('weight', 'DESC')->get();

        return view('index', compact('categories_ru', 'categories_eu', 'categories_blitz'));
    }
}
