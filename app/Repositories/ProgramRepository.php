<?php

namespace App\Repositories;

use App\Models\Program;
use App\Interfaces\ProgramInterface;
use Illuminate\Support\Facades\Storage;

class ProgramRepository implements ProgramInterface
{
    private $program;

    public function __construct(Program $program)
    {
        $this->program = $program;
    }

    public function getAll()
    {
        return $this->program->orderBy('created_at', 'desc')->get();
    }

    public function getById($id)
    {
        return $this->program->find($id);
    }

    public function store($data)
    {
        $filename = uniqid() . '.' . $data['image']->extension();
        $data['image']->storeAs('public/program', $filename);
        $data['image'] = $filename;

        return $this->program->create($data);
    }

    public function update($id, $data)
    {
        $program = $this->program->find($id);

        if (isset($data['image'])) {
            $filename = uniqid() . '.' . $data['image']->extension();
            $data['image']->storeAs('public/program', $filename);
            $data['image'] = $filename;
        }

        return $program->update($data);
    }

    public function destroy($id)
    {
        $program = $this->program->find($id);

        Storage::delete('public/program/' . $program->image);

        return $program->delete();
    }
    
}
