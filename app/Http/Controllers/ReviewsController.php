<?php

namespace App\Http\Controllers;

use App\Http\Requests\Review\StoreRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        return view('reviews', compact('reviews'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        if (empty($data['telegram_hidden']))
            $data['telegram_hidden'] = 0;

        Review::create($data);

        return redirect()->route('review');
    }
}
