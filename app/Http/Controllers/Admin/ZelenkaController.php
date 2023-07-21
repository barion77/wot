<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Zelenka\Parser;
use App\Classes\Zelenka\ZelenkaApi;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Instruction;
use Illuminate\Http\Request;

class ZelenkaController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $instructions = Instruction::all();

        return view('admin.zelenka.index', compact('categories', 'instructions'));
    }

    public function parse(Request $request)
    {
        $data = $request->all();
        if ($data['parse_type'] == 'url')
            $data = $request->validate([
                'url' => 'required',
                'category_id' => 'required|integer',
                'price' => 'required|integer',
                'parse_type' => 'required',
                'instruction_id' => 'required',
            ]);

        $parser = new Parser();

        if ($data['parse_type'] == 'url') {
            $parse_status = $parser->addItemWithDescription($data['url'], $data['category_id'], $data['price'], $data['instruction_id']);

            return redirect()->back()->with('parse_status', $parse_status);
        }
        else {
            dd('Not complete');
        }
    }
}
