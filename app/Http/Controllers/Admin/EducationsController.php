<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\EducationsInterface;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    private $educations;

    public function __construct(EducationsInterface $educations)
    {
        $this->educations = $educations;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables()
                ->of($this->educations->getAll())
                ->addColumn('university_name', function ($data) {
                    return $data->university_name;
                })
                ->addColumn('study', function ($data) {
                    return $data->study;
                })
                ->addColumn('period', function ($data) {
                    if ($data->end_date == null) return date('F Y', strtotime($data->start_date)) . ' - sekarang';

                    return date('F Y', strtotime($data->start_date)) . ' - ' . date('F Y', strtotime($data->end_date));
                })
                ->addColumn('action', function ($data) {
                    return view('admin.educations.column.action', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.educations.index');
    }

    public function getById($id)
    {
        return $this->educations->getById($id);
    }

    public function create()
    {
        return view('admin.educations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'university_name' => ['required'],
            'study' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['nullable'],
        ]);

        try {
            $this->educations->store($request->all());
            return redirect()->route('admin.educations.index')->with('success', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->route('admin.educations.index')->with('error', 'Gagal menambahkan data');
        }
    }

    public function edit($id)
    {
        return view('admin.educations.edit', [
            'educations' => $this->educations->getById($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'university_name' => ['required'],
            'study' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['nullable'],
        ]);

        try {
            $this->educations->update($id, $request->all());
            return redirect()->route('admin.educations.index')->with('success', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            return redirect()->route('admin.educations.index')->with('error', 'Gagal mengubah data');
        }
    }

    public function destroy($id)
    {
        $this->educations->delete($id);
        return response()->json(true);
    }
}
