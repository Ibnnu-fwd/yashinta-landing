<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\OrganizationsInterface;

class OrganizationsController extends Controller
{
    private $organizations;

    public function __construct(OrganizationsInterface $organizations)
    {
        $this->organizations = $organizations;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables()
                ->of($this->organizations->getAll())
                ->addColumn('name', function ($data) {
                    return $data->name;
                })
                ->addColumn('position', function ($data) {
                    return $data->position;
                })
                ->addColumn('period', function ($data) {
                    if ($data->end_date == null) return date('F Y', strtotime($data->start_date)) . ' - sekarang';

                    return date('F Y', strtotime($data->start_date)) . ' - ' . date('F Y', strtotime($data->end_date));
                })
                ->addColumn('action', function ($data) {
                    return view('admin.organizations.column.action', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.organizations.index');
    }

    public function create()
    {
        return view('admin.organizations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'position' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['nullable'],
        ]);

        try {
            $this->organizations->store($request->all());
            return redirect()->route('admin.organizations.index')->with('success', 'Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->route('admin.organizations.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        return view('admin.organizations.edit', [
            'organizations' => $this->organizations->getById($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            'position' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['nullable'],
        ]);

        try {
            $this->organizations->update($id, $request->all());
            return redirect()->route('admin.organizations.index')->with('success', 'Data berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->route('admin.organizations.index')->with('error', 'Data gagal diubah');
        }
    }

    public function destroy($id)
    {
        $this->organizations->destroy($id);
        return response()->json(true);
    }
}
