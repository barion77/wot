<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Scammer\StoreRequest;
use App\Http\Requests\Admin\Scammer\UpdateRequest;
use App\Models\Scammer;
use Illuminate\Http\Request;

class ScammersController extends Controller
{
    public function index()
    {
        $scammers = Scammer::all();

        return view('admin.scammer.index', compact('scammers'));
    }

    public function create()
    {
        return view('admin.scammer.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        Scammer::create($data);

        return redirect()->route('admin.scammer.index');
    }

    public function edit(Scammer $scammer)
    {
        return view('admin.scammer.edit', compact('scammer'));
    }

    public function update(UpdateRequest $request, Scammer $scammer)
    {
        $data = $request->validated();
        $data = array_filter($data);

        $scammer->update($data);

        return redirect()->route('admin.scammer.index');
    }

    public function delete(Scammer $scammer)
    {
        $scammer->delete();

        return redirect()->route('admin.scammer.index');
    }
}
