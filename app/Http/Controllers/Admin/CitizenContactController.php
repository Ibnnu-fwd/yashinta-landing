<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\CitizenContactInterface;
use Illuminate\Http\Request;

class CitizenContactController extends Controller
{
    private $citizenContact;

    public function __construct(CitizenContactInterface $citizenContact)
    {
        $this->citizenContact = $citizenContact;
    }

    public function index(Request $request)
    {
        $results = $this->citizenContact->getAll();

        if ($request->ajax()) {
            return datatables()->of($results)
                ->addColumn('name', function ($data) {
                    return $data->name;
                })
                ->addColumn('phone_number', function ($data) {
                    return $data->phone_number;
                })
                ->addColumn('action', function ($data) {
                    return view('admin.citizen-contact.column.action', compact('data'));
                })
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.citizen-contact.index');
    }

    public function destroy($id)
    {
        $this->citizenContact->delete($id);
        return response()->json(true);
    }
}
