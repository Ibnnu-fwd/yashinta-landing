<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ExperiencesInterface;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    private $experiences;

    public function __construct(ExperiencesInterface $experiences)
    {
        $this->experiences = $experiences;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables()
                ->of($this->experiences->getAll())
                ->addColumn('company_name', function ($data) {
                    return $data->company_name;
                })
                ->addColumn('position', function ($data) {
                    return $data->position;
                })
                ->addColumn('period', function ($data) {
                    if($data->end_date == null) return date('F Y', strtotime($data->start_date)) . ' - sekarang';
                    
                    return date('F Y', strtotime($data->start_date)) . ' - ' . date('F Y', strtotime($data->end_date));
                })
                ->addColumn('action', function ($data) {
                    return view('admin.experiences.column.action', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.experiences.index');
    }

    public function create()
    {
        return view('admin.experiences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => ['required'],
            'position' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['nullable'],
        ]);

        try{
            $this->experiences->store($request->all());
            return redirect()->route('admin.experiences.index')->with('success', 'Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->route('admin.experiences.index')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        return view('admin.experiences.edit', [
            'experiences' => $this->experiences->getById($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'company_name' => ['required'],
            'position' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['nullable'],
        ]);

        try{
            $this->experiences->update($id, $request->all());
            return redirect()->route('admin.experiences.index')->with('success', 'Data berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->route('admin.experiences.index')->with('error', 'Data gagal diubah');
        }
    }

    public function destroy($id)
    {
        try{
            $this->experiences->delete($id);
            return redirect()->route('admin.experiences.index')->with('success', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->route('admin.experiences.index')->with('error', 'Data gagal dihapus');
        }
    }
}
