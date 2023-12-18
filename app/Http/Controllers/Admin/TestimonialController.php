<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\TestimonialInterface;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    private $testimonial;

    public function __construct(TestimonialInterface $testimonial)
    {
        $this->testimonial = $testimonial;
    }

    public function index(Request $request)
    {
        $results = $this->testimonial->getAll();

        if ($request->ajax()) {
            return datatables()->of($results)
                ->addColumn('name', function ($data) {
                    return $data->name;
                })
                ->addColumn('job', function ($data) {
                    return $data->job;
                })
                ->addColumn('text', function ($data) {
                    return $data->text;
                })
                ->addColumn('image', function ($data) {
                    return view('admin.testimonial.column.image', compact('data'));
                })
                ->addColumn('action', function ($data) {
                    return view('admin.testimonial.column.action', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.testimonial.index');
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => ['required'],
            'job' => ['required'],
            'text'   => ['required'],
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);

        $this->testimonial->store($request->all());

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit($id)
    {
        $testimonial = $this->testimonial->getById($id);

        return view('admin.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'     => ['required'],
            'job' => ['required'],
            'text'   => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);

        $this->testimonial->update($id, $request->all());

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy($id)
    {
        $this->testimonial->delete($id);
    }
}