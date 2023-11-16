<?php

namespace App\Interfaces;

interface EducationInterface
{
    public function getAll();
    public function getById($id);
    public function create($data);
    public function update($data);
    public function delete($id);
}
