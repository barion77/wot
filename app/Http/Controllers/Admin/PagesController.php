<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page\StoreRequest;
use App\Http\Requests\Admin\Page\UpdateRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PagesController extends Controller
{
    public function index()
    {
        return view('admin.page.index');
    }

    public function create()
    {
        return view('admin.page.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        Page::create($data);

        return redirect()->route('admin.page.index');
    }

    public function edit(Page $page)
    {
        return view('admin.page.edit', compact('page'));
    }

    public function update(UpdateRequest $request, Page $page)
    {
        $data = $request->validated();

        $page->update($data);

        return redirect()->route('admin.page.index');
    }

    public function delete(Page $page)
    {
        $page->delete();

        return redirect()->route('admin.page.index');
    }

    public function data()
    {
        $categories = Page::all();

        return DataTables::of($categories)
            ->editColumn('created', function($page) {
                return date('Y-m-d H:i:s', strtotime($page->created_at));
            })
            ->addColumn('actions', function($page) {

                $edit = '<a href="' . route('admin.page.edit', $page->id) . '" class="btn btn-primary mr-2">Изменить</a>';
                $delete = '<form style="display:inline-block;" action="' . route('admin.page.delete', $page->id) . '" method="post">' . csrf_field() . method_field('DELETE') . '<input type="submit" class="btn btn-danger" value="Удалить"></form>';

                return $edit . $delete;
            })->rawColumns(['actions'])->make(true);
    }
}
