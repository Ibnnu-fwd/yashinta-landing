<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\AspirationInterface;
use Illuminate\Http\Request;

class AspirationController extends Controller
{
    private $aspiration;

    public function __construct(AspirationInterface $aspiration)
    {
        $this->aspiration = $aspiration;
    }

    public function index(Request $request)
    {
        if ($request->ajax() && $request->input('filter') == 'last_30_days') {
            return datatables()
                ->of($this->aspiration->getLast30Days())
                ->addColumn('name', function ($data) {
                    return $data->name;
                })
                ->addColumn('city', function ($data) {
                    return $data->city;
                })
                ->addColumn('phone_number', function ($data) {
                    if ($data->phone_number !=null){
                        return $data->phone_number;
                    }
                    else
                        return '-';
                })
                ->addColumn('message', function ($data) {
                    return view('admin.aspiration.column.content', compact('data'));
                })
                ->addColumn('created_at', function ($data) {
                    return date('d F Y H:i', strtotime($data->created_at));
                })
                ->addColumn('action', function ($data) {
                    return view('admin.aspiration.column.action', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        } elseif ($request->ajax() && $request->input('filter') == 'all') {
            return datatables()
                ->of($this->aspiration->getAll())
                ->addColumn('name', function ($data) {
                    return $data->name;
                })
                ->addColumn('city', function ($data) {
                    return $data->city;
                })
                ->addColumn('phone_number', function ($data) {
                    if ($data->phone_number !=null){
                        return $data->phone_number;
                    }
                    else
                        return '-';
                })
                ->addColumn('message', function ($data) {
                    return view('admin.aspiration.column.content', compact('data'));
                })
                ->addColumn('created_at', function ($data) {
                    return date('d F Y H:i', strtotime($data->created_at));
                })
                ->addColumn('action', function ($data) {
                    return view('admin.aspiration.column.action', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.aspiration.index');
    }

    public function show($id)
    {
        return view('admin.aspiration.show', [
            'aspiration' => $this->aspiration->getById($id),
        ]);
    }

    public function destroy($id)
    {
        $this->aspiration->delete($id);
        return response()->json(true);
    }
}
