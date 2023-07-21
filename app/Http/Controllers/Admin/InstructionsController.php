<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Instruction\StoreRequest;
use App\Http\Requests\Admin\Instruction\UpdateRequest;
use App\Models\Instruction;

class InstructionsController extends Controller
{
    public function index()
    {
        $instructions = Instruction::all();

        return view('admin.instruction.index', compact('instructions'));
    }

    public function create()
    {
        return view('admin.instruction.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        Instruction::create($data);

        return redirect()->route('admin.instruction.index');
    }

    public function edit(Instruction $instruction)
    {
        return view('admin.instruction.edit', compact('instruction'));
    }

    public function update(UpdateRequest $request, Instruction $instruction)
    {
        $data = $request->validated();
        $data = array_filter($data);

        $instruction->update($data);

        return redirect()->route('admin.instruction.index');
    }

    public function delete(Instruction $instruction)
    {
        $instruction->delete();

        return redirect()->route('admin.instruction.index');
    }
}
