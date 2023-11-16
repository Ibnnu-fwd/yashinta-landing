<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\SocialMediaInterface;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    private $socialMedia;

    public function __construct(SocialMediaInterface $socialMedia){
        $this->socialMedia = $socialMedia;
    }

    public function index(Request $request)
    {   
        $results = $this->socialMedia->getAll();

        if ($request->ajax())
        {
            return datatables()->of($results)
                ->addColumn('name', function ($data) {
                    return $data->name;
                })
                ->addColumn('icon', function ($data) {
                    return view('admin.social-media.column.icon', compact('data'));
                })
                ->addColumn('username', function ($data) {
                    return $data->username;
                })
                ->addColumn('link', function ($data) {
                    return $data->link;
                })
                ->addColumn('action', function ($data) {
                    return view('admin.social-media.column.action', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.social-media.index');
    }

    public function create()
    {
        return view('admin.social-media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => ['required'],
            'icon' => ['required', 'image', 'mimes:svg', 'max:2048'],
            'username'   => ['required'],
            'link' => ['required'],
        ]);

       
        try {
            $this->socialMedia->store($request->all());
            return redirect()->route('admin.social-media.index')->with('success', 'Berhasil menambahkan data');
        } catch (\Throwable $th) {
            return redirect()->route('admin.social-media.index')->with('error', 'Gagal menambahkan data');
        }
    }

    public function edit($id)
    {
        return view('admin.social-media.edit', [
            'socialMedia' => $this->socialMedia->getById($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'     => ['required'],
            'icon' => ['required', 'image', 'mimes:svg', 'max:2048'],
            'username'   => ['required'],
            'link' => ['required'],
        ]);

        try {
            $this->socialMedia->update($id, $request->all());
            return redirect()->route('admin.social-media.index')->with('success', 'Berhasil mengubah data');
        } catch (\Throwable $th) {
            return redirect()->route('admin.social-media.index')->with('error', 'Gagal mengubah data');
        }
    }

    public function destroy($id)
    {
        $this->socialMedia->delete($id);
        return redirect()->route('admin.social-media.index')->with('success', 'Berhasil menghapus data');
    }
}
