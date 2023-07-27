<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Review\StoreRequest;
use App\Http\Requests\Admin\Review\UpdateRequest;
use App\Models\Category;
use App\Models\Review;
use Yajra\DataTables\Facades\DataTables;

class ReviewsController extends Controller
{
    public function index()
    {
        return view('admin.review.index');
    }

    public function create()
    {
        return view('admin.review.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data = array_filter($data);

        Review::create($data);

        return redirect()->route('admin.review.index');
    }

    public function edit(Review $review)
    {
        return view('admin.review.edit', compact('review'));
    }

    public function update(UpdateRequest $request, Review $review)
    {
        $data = $request->validated();
        $data = array_filter($data);

        $review->update($data);

        return redirect()->route('admin.review.index');
    }

    public function delete(Review $review)
    {
        $review->delete();

        return redirect()->route('admin.review.index');
    }

    public function data()
    {
        $reviews = Review::all();

        return DataTables::of($reviews)
            ->editColumn('good', function($review) {
                return $review->good == '0' ? 'Отрицательная' : 'Положительная';
            })
            ->editColumn('created', function($review) {
                return date('Y-m-d H:i:s', strtotime($review->created_at));
            })
            ->addColumn('actions', function($review) {

                $edit = '<a href="' . route('admin.review.edit', $review->id) . '" class="btn btn-primary mr-2">Изменить</a>';
                $delete = '<form style="display:inline-block;" action="' . route('admin.review.delete', $review->id) . '" method="post">' . csrf_field() . method_field('DELETE') . '<input type="submit" class="btn btn-danger" value="Удалить"></form>';

                return $edit . $delete;
            })->rawColumns(['actions'])->make(true);
    }
}
