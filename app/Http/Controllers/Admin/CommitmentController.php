<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\CommitmentInterface;
use Illuminate\Http\Request;

class CommitmentController extends Controller
{
    private $commitment;

    public function __construct(CommitmentInterface $commitment)
    {
        $this->commitment = $commitment;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables()
                ->of($this->commitment->getAll())
                ->addColumn('title', function ($data) {
                    return $data->title;
                })
                ->addColumn('slug', function ($data) {
                    return $data->slug;
                })
                ->addColumn('content', function ($data) {
                    return $data->content;
                })
                ->addColumn('thumbnail', function ($data) {
                    return view('admin.commitment.column.thumbnail', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.commitment.index');
    }

    public function getById($id)
    {
        return $this->commitment->getById($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => ['required'],
            'slug'      => ['required'],
            'content'   => ['required'],
            'thumbnail' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        try {
            $this->commitment->store($request->all());
            return redirect()->route('admin.commitment.index')->with('success', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            return redirect()->route('admin.commitment.index')->with('error', 'Gagal menambahkan data');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title'     => ['required'],
            'slug'      => ['required'],
            'content'   => ['required'],
            'thumbnail' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        try {
            $this->commitment->update($id, $request->all());
            return redirect()->route('admin.commitment.index')->with('success', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            return redirect()->route('admin.commitment.index')->with('error', 'Gagal mengubah data');
        }
    }

    public function destroy($id)
    {
        $this->commitment->destroy($id);
        return response()->json(true);
    }
}
