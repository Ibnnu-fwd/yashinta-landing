<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\GalleryInterface;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    private $gallery;

    public function __construct(GalleryInterface $gallery){
        $this->gallery = $gallery;
    }

    public function index(Request $request)
    {   
        $results = $this->gallery->getAll();

        if ($request->ajax())
        {
            return datatables()->of($results)
                ->addColumn('title', function ($data) {
                    return $data->title;
                })
                ->addColumn('thumbnail', function ($data) {
                    return view('admin.gallery.column.thumbnail', compact('data'));
                })
                ->addColumn('date', function ($data) {
                    return date('d F Y', strtotime($data->date));
                })
                ->addColumn('action', function ($data) {
                    return view('admin.gallery.column.action', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.gallery.index');
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => ['required'],
            'date'   => ['required'],
            'thumbnail' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $this->gallery->store($request->all());
        return redirect()->route('admin.gallery.index')->with('success', 'Photo added successfully');
    }

    public function edit($id)
    {
        return view('admin.gallery.edit', [
            'gallery' => $this->gallery->getById($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'     => ['required'],
            'date'   => ['required'],
            'thumbnail' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);
        
        $this->gallery->update($request->all(), $id);
        return redirect()->route('admin.gallery.index')->with('success', 'Photo updated successfully');
    }

    public function destroy($id)
    {
        $this->gallery->delete($id);
        return redirect()->route('admin.gallery.index')->with('success', 'Photo deleted successfully');
    }

}
