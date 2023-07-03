<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreRequest;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ProductsController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.product.create', compact('categories'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['images'] = json_encode($data['images']);

        Product::create($data);

        return redirect()->route('admin.product.index');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.product.edit', compact('product', 'categories'));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $data = array_filter($data);

        $product->update($data);

        return redirect()->route('admin.product.index');
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.product.index');
    }

    public function imagesUpload(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(5) .date('d') . rand(1, 9) . date('h') . ".$extension";

            $filepath = $file->storeAs('products',  $filename, 'public');

            return $filepath;
        }

        return '';
    }

    public function data()
    {
        $products = Product::all();

        return DataTables::of($products)
            ->editColumn('category', function($product) {
                return $product->category->title;
            })
            ->editColumn('created', function($product) {
                return date('Y-m-d H:i:s', strtotime($product->created_at));
            })
            ->addColumn('actions', function($product) {

                $edit = '<a href="' . route('admin.product.edit', $product->id) . '" class="btn btn-primary mr-2">Изменить</a>';
                $delete = '<form style="display:inline-block;" action="' . route('admin.product.delete', $product->id) . '" method="post">' . csrf_field() . method_field('DELETE') . '<input type="submit" class="btn btn-danger" value="Удалить"></form>';

                return $edit . $delete;
            })->rawColumns(['actions'])->make(true);
    }
}
