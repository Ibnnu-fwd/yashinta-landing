<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ProgramInterface;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    private $program;

    public function __construct(ProgramInterface $program)
    {
        $this->program = $program;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables()->of($this->program->getAll())
                ->addColumn('title', function ($data) {
                    return $data->title;
                })
                ->addColumn('description', function ($data) {
                    return $data->description;
                })
                ->addColumn('image', function ($data) {
                    return view('admin.program.column.image', compact('data'));
                })
                ->addColumn('action', function ($data) {
                    return view('admin.program.column.action', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.program.index');
    }

    public function create()
    {
        return view('admin.program.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => ['required'],
            'description'   => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $this->program->store($request->all());
        return redirect()->route('admin.program.index')->with('success', 'Program added successfully');
    }

    public function edit($id)
    {
        return view('admin.program.edit', [
            'program' => $this->program->getById($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'     => ['required'],
            'description'   => ['required'],
            'image' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $this->program->update($id, $request->all());
        return redirect()->route('admin.program.index')->with('success', 'Program updated successfully');
    }

    public function destroy($id)
    {
        $this->program->destroy($id);
        return response()->json(true);
    }
}
