<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\FaqInterface;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    private $faq;

    public function __construct(FaqInterface $faq)
    {
        $this->faq = $faq;
    }

    public function index(Request $request)
    {
        $results = $this->faq->getAll();

        if ($request->ajax()) {
            return datatables()->of($results)
                ->addColumn('name', function ($data) {
                    return $data->question;
                })
                ->addColumn('answer', function ($data) {
                    return view('admin.faq.column.answer', compact('data'));
                })
                ->addColumn('action', function ($data) {
                    return view('admin.faq.column.action', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.faq.index');
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required'
        ]);

        try {
            $this->faq->store($request->all());
            return redirect()->route('admin.faq.index')->with('success', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            return redirect()->route('admin.faq.index')->with('error', 'Gagal menambahkan data');
        }
    }

    public function edit($id)
    {
        return view('admin.faq.edit', [
            'faq' => $this->faq->getById($id)
        ]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required'
        ]);

        try {
            $this->faq->update($id, $request->all());
            return redirect()->route('admin.faq.index')->with('success', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            return redirect()->route('admin.faq.index')->with('error', 'Gagal mengubah data');
        }
    }

    public function destroy($id)
    {
        $this->faq->delete($id);
        return response()->json(true);
    }
}
