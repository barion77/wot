<?php

namespace App\Http\Controllers;

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
}
