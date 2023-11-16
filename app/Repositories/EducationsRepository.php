<?php

namespace App\Repositories;

use App\Models\Educations;
use App\Interfaces\EducationsInterface;

class EducationsRepository implements EducationsInterface
{
    private $educations;

    public function __construct(Educations $educations)
    {
        $this->educations = $educations;
    }

    public function getAll()
    {
        return $this->educations->all();
    }

    public function getById($id)
    {
        return $this->educations->find($id);
    }

    public function store($data)
    {
        return $this->educations->create($data);
    }

    public function update($id, $data)
    {
        return $this->educations->find($id)->update($data);
    }

    public function delete($id)
    {
        return $this->educations->find($id)->delete();
    }
}
