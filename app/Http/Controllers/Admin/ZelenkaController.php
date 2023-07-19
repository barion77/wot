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
        $data = $request->all();

        $zelenka_api = new ZelenkaApi();

        if ($data['parse_type'] == 'url') {

            $item_id = preg_replace("/[^0-9]/", '', $data['url']);
            $item = $zelenka_api->getItem($item_id);

            dd($item);

        }

        $category = $data['category'];
        unset($data['category']);

        $data = array_filter($data);

        if (!empty($data['tel']))
            $data['tel'] = $data['tel'] == 'yes';

        $items = $zelenka_api->getItemsList($category, $data);

        dd($items);
    }
}
