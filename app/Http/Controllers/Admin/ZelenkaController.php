<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Zelenka\ZelenkaApi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ZelenkaController extends Controller
{
    public function index()
    {
        return view('admin.zelenka.index');
    }

    public function parse(Request $request)
    {
        $data = $request->validate([
            'title' => '',
            'pmin' => '',
            'pmax' => '',
            'category' => 'required|string',
        ]);

        $category = $data['category'];
        unset($data['category']);

        $data = array_filter($data);

        $zelenka_api = new ZelenkaApi();

        $items = $zelenka_api->getItemsList($category, $data);

        dd($items);
    }
}
