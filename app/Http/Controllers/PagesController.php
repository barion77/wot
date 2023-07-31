<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Scammer;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function guarantee()
    {
        return view('pages.guarantee');
    }

    public function activation()
    {
        return view('pages.activation');
    }

    public function rules()
    {
        return view('pages.rules');
    }

    public function support()
    {
        return view('pages.support');
    }

    public function scammers()
    {
        $scammers = Scammer::all();

        return view('pages.scammers', compact('scammers'));
    }

    public function showPage($slug)
    {

        $page = Page::where('slug', $slug)->first();
        if (!empty($page))
            return view('pages.dynamic', compact('page'));

        if (view()->exists("pages.$slug")) {
            $scammers = Scammer::all();

            return view("pages.$slug", compact('scammers'));
        }

        abort(404);
    }
}
