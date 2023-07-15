<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        $main_categories = ['WoT RU', 'WoT EU', 'WoTBLITZ'];

        return view('admin.category.create', compact('main_categories'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        Category::create($data);

        return redirect()->route('admin.category.index');
    }

    public function edit(Category $category)
    {
        $main_categories = ['WoT RU', 'WoT EU', 'WoTBLITZ'];

        return view('admin.category.edit', compact('category', 'main_categories'));
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();

        $category->update($data);

        return redirect()->route('admin.category.index');
    }

    public function delete(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.category.index');
    }

    public function data()
    {
        $categories = Category::all();

        return DataTables::of($categories)
            ->editColumn('cat', function($category) {
                $main_categories = ['WoT RU', 'WoT EU', 'WoTBLITZ'];

                return $main_categories[$category->main_cat];
            })
            ->editColumn('created', function($category) {
                return date('Y-m-d H:i:s', strtotime($category->created_at));
            })
            ->addColumn('actions', function($category) {

                $edit = '<a href="' . route('admin.category.edit', $category->id) . '" class="btn btn-primary mr-2">Изменить</a>';
                $delete = '<form style="display:inline-block;" action="' . route('admin.category.delete', $category->id) . '" method="post">' . csrf_field() . method_field('DELETE') . '<input type="submit" class="btn btn-danger" value="Удалить"></form>';

                return $edit . $delete;
            })->rawColumns(['actions'])->make(true);
    }
}
