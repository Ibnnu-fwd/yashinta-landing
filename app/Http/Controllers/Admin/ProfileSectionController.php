<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ProfileSectionInterface;
use Illuminate\Http\Request;

class ProfileSectionController extends Controller
{
    private $profileSection;

    public function __construct(ProfileSectionInterface $profileSection)
    {
        $this->profileSection = $profileSection;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables()->of($this->profileSection->getAll())
                ->addColumn('title', function ($data) {
                    if (isset($data->title)) return $data->title;
                    else return '-';
                })
                ->addColumn('quotes', function ($data) {
                    if (isset($data->quotes)) return $data->quotes;
                    else return '-';
                })
                ->addColumn('image', function ($data) {
                    if (isset($data->image)) return view('admin.profile-section.column.image', compact('data'));
                    else return '-';
                })
                ->addColumn('content', function ($data) {
                    if (isset($data->content)) return view('admin.profile-section.column.content', compact('data'));
                    else return '-';
                })
                ->addColumn('action', function ($data) {
                    return view('admin.profile-section.column.action', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.profile-section.index');
    }

    public function create()
    {
        return view('admin.profile-section.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'     => ['nullable'],
            'quotes'   => ['nullable'],
            'image' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'content' => ['nullable']
        ]);

        $this->profileSection->store($request->all());
        return redirect()->route('admin.profile-section.index')->with('success', 'Profile section added successfully');
    }

    public function edit($id)
    {
        return view('admin.profile-section.edit', [
            'profileSections' => $this->profileSection->getById($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'     => ['nullable'],
            'quotes'   => ['nullable'],
            'image' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'content' => ['nullable']
        ]);

        $this->profileSection->update($id, $request->all());
        return redirect()->route('admin.profile-section.index')->with('success', 'Profile section updated successfully');
    }

    public function destroy($id)
    {
        $this->profileSection->destroy($id);
        return response()->json(true);
    }
}