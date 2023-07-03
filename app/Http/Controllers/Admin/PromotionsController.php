<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Promotion\StoreRequest;
use App\Http\Requests\Admin\Promotion\UpdateRequest;
use App\Models\Promotion;
use Yajra\DataTables\Facades\DataTables;

class PromotionsController extends Controller
{
    public function index()
    {
        return view('admin.promotion.index');
    }

    public function create()
    {
        return view('admin.promotion.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        Promotion::create($data);

        return redirect()->route('admin.promotion.index');
    }

    public function edit(Promotion $promotion)
    {
        return view('admin.promotion.edit', compact('promotion'));
    }

    public function update(UpdateRequest $request, Promotion $promotion)
    {
        $data = $request->validated();

        $promotion->update($data);

        return redirect()->route('admin.promotion.index');
    }

    public function delete(Promotion $promotion)
    {
        $promotion->delete();

        return redirect()->route('admin.promotion.index');
    }

    public function data()
    {
        $promotions = Promotion::all();

        return DataTables::of($promotions)
            ->editColumn('created', function($promotion) {
                return date('Y-m-d H:i:s', strtotime($promotion->created_at));
            })
            ->addColumn('actions', function($promotion) {

                $edit = '<a href="' . route('admin.promotion.edit', $promotion->id) . '" class="btn btn-primary mr-2">Изменить</a>';
                $delete = '<form style="display:inline-block;" action="' . route('admin.promotion.delete', $promotion->id) . '" method="post">' . csrf_field() . method_field('DELETE') . '<input type="submit" class="btn btn-danger" value="Удалить"></form>';

                return $edit . $delete;
            })->rawColumns(['actions'])->make(true);
    }
}
