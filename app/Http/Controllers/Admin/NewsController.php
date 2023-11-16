<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\NewsInterface;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news;

    public function __construct(NewsInterface $news){
        $this->news = $news;
    }

    public function index(Request $request)
    {   
        $results = $this->news->getAll();

        if ($request->ajax())
        {
            return datatables()->of($results)
                ->addColumn('title', function ($data) {
                    return $data->title;
                })
                ->addColumn('thumbnail', function ($data) {
                    return view('admin.news.column.thumbnail', compact('data'));
                })
                ->addColumn('content', function ($data) {
                    return view('admin.news.column.content', compact('data'));
                })
                ->addColumn('author', function ($data) {
                    return $data->author;
                })
                ->addColumn('published_date', function ($data) {
                    return date('d F Y', strtotime($data->published_date));
                })
                ->addColumn('action', function ($data) {
                    return view('admin.news.column.action', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.news.index');
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => ['required'],
            'content'   => ['required'],
            'thumbnail' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'author' => ['required'],
            'published_date' => ['required'],
        ]);

        $this->news->store($request->all());
        return redirect()->route('admin.news.index')->with('success', 'News added successfully');
    }

    public function edit($id)
    {
        return view('admin.news.edit', [
            'news' => $this->news->getById($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'     => ['required'],
            'content'   => ['required'],
            'thumbnail' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'author' => ['required'],
            'published_date' => ['required'],
        ]);

        try {
            $this->news->update($id, $request->all());
            return redirect()->route('admin.news.index')->with('success', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            return redirect()->route('admin.news.index')->with('error', 'Gagal mengubah data');
        }
    }

    public function destroy($id)
    {
        $this->news->delete($id);
        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully');
    }
}
