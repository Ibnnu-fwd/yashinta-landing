<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Interfaces\SocialActivityInterface;
use App\Http\Controllers\Controller;


class SocialActivityController extends Controller
{
    private $socialActivity;

    public function __construct(SocialActivityInterface $socialActivity)
    {
        $this->socialActivity = $socialActivity;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables()
                ->of($this->socialActivity->getAll())
                ->addColumn('name', function ($data) {
                    return $data->name;
                })
                ->addColumn('description', function ($data) {
                    return view('admin.social-activity.column.description', compact('data'));
                })
                ->addColumn('date', function ($data) {
                    return date('d-m-Y', strtotime($data->date));
                })
                ->addColumn('action', function ($data) {
                    return view('admin.social-activity.column.action', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.social-activity.index');
    }

    public function create()
    {
        return view('admin.social-activity.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'date' => ['required'],
        ]);

        try {
            $this->socialActivity->store($request->all());
            return redirect()->route('admin.social-activity.index')->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->route('admin.social-activity.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        $socialActivity = $this->socialActivity->getById($id);
        return view('admin.social-activity.edit', compact('socialActivity'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'date' => ['required'],
        ]);

        try {
            $this->socialActivity->update($id, $request->all());
            return redirect()->route('admin.social-activity.index')->with('success', 'Data berhasil diubah');
        } catch (\Exception $e) {
            return redirect()->route('admin.social-activity.index')->with('error', 'Data gagal diubah');
        }
    }

    public function destroy($id)
    {
        $this->socialActivity->destroy($id);
        return response()->json(true);
    }
}
