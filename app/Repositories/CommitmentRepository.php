<?php

namespace App\Repositories;

use App\Interfaces\CommitmentInterface;
use App\Models\Commitment;
use Illuminate\Support\Facades\Storage;

class CommitmentRepository implements CommitmentInterface
{
    private $commitment;

    public function __construct(Commitment $commitment)
    {
        $this->commitment = $commitment;
    }

    public function getAll()
    {
        return $this->commitment->all();
    }

    public function getById($id)
    {
        return $this->commitment->find($id);
    }

    public function store($data)
    {
        if (isset($data['thumbnail'])) {
            $filename = uniqid() . '.' . $data['thumbnail']->extension();
            $data['thumbnail']->storeAs('public/commitment', $filename);
            $data['thumbnail'] = $filename;
        }

        return $this->commitment->create($data);
    }

    public function update($id, $data)
    {
        $commitment = $this->commitment->find($id);

        if (isset($data['thumbnail'])) {
            $filename = uniqid() . '.' . $data['thumbnail']->extension();
            $data['thumbnail']->storeAs('public/commitment', $filename);
            $data['thumbnail'] = $filename;

            if ($commitment->thumbnail != null) {
                Storage::delete('public/commitment/' . $commitment->thumbnail);
            }
        }

        return $commitment->update($data);
    }

    public function destroy($id)
    {
        $commitment = $this->commitment->find($id);

        if ($commitment->thumbnail != null) {
            Storage::delete('public/commitment/' . $commitment->thumbnail);
        }

        return $commitment->delete();
    }

    public function getBySlug($slug)
    {
        return $this->commitment->where('slug', $slug)->first();
    }
}
