<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\AgendaInterface;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    private $agenda;

    public function __construct(AgendaInterface $agenda)
    {
        $this->agenda = $agenda;
    }

    public function index(Request $request)
    {
        $results = $this->agenda->getAll();

        if ($request->ajax()) {
            return datatables()->of($results)
                ->addColumn('title', function ($data) {
                    return $data->title;
                })
                ->addColumn('description', function ($data) {
                    return $data->description;
                })
                ->addColumn('start_date', function ($data) {
                    return date('d F Y', strtotime($data->start_date));
                })
                ->addColumn('start_time', function ($data) {
                    return date('h.i', strtotime($data->start_time));
                })
                ->addColumn('end_date', function ($data) {
                    if($data->end_date)
                        return date('d F Y', strtotime($data->end_date));
                    else
                        return "-";
                })
                ->addColumn('end_time', function ($data) {
                    if($data->end_time)
                        return date('h.i', strtotime($data->end_time));
                    else
                        return "-";
                })
                ->addColumn('color', function ($data) {
                    return view('admin.agenda.column.color', compact('data'));
                })
                ->addColumn('action', function ($data) {
                    return view('admin.agenda.column.action', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.agenda.index');
    }

    public function create()
    {
        return view('admin.agenda.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'max:100'],
            'location' => ['required', 'max:30'],
            'color' => ['required'],
            'start_date' => ['required'],
            'start_time' => ['required'],
            'end_date' => ['nullable'],
            'end_time' => ['nullable'],
        ]);

        try {
            $this->agenda->store($request->all());
            return redirect()->route('admin.agenda.index')->with('success', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            return redirect()->route('admin.agenda.index')->with('error', 'Gagal menambahkan data');
        }
    }

    public function edit($id)
    {
        return view('admin.agenda.edit', [
            'agenda' => $this->agenda->getById($id)
        ]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'max:100'],
            'location' => ['required', 'max:50'],
            'color' => ['required'],
            'start_date' => ['required'],
            'start_time' => ['required'],
            'end_date' => ['nullable'],
            'end_time' => ['nullable'],
        ]);

        try {
            $this->agenda->update($id, $request->all());
            return redirect()->route('admin.agenda.index')->with('success', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            return redirect()->route('admin.agenda.index')->with('error', 'Gagal mengubah data');
        }
    }

    public function destroy($id)
    {
        $this->agenda->delete($id);
        return response()->json(true);
    }
}
