<?php

namespace App\Repositories;
use App\Models\Aspiration;
use App\Interfaces\AspirationInterface;
use Illuminate\Support\Facades\Storage;

class AspirationRepository implements AspirationInterface
{
    private $aspiration;

    public function __construct(Aspiration $aspiration)
    {
        $this->aspiration = $aspiration;
    }

    public function getAll()
    {
        return $this->aspiration->orderBy('created_at', 'desc')->get();
    }

    public function getById($id)
    {
        return $this->aspiration->find($id);
    }

    public function store($data)
    {
        return $this->aspiration->create($data);
    }

    public function update($id, $data)
    {
        $aspiration = $this->aspiration->find($id);
        $aspiration->update($data);
        return $aspiration;
    }

    public function delete($id)
    {
        $aspiration = $this->aspiration->find($id);
        $aspiration->delete();
        return $aspiration;
    }
}