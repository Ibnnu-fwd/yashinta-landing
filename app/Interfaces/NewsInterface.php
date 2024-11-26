<?php

namespace App\Interfaces;

interface NewsInterface
{
    public function getAll();
    public function paginate($number);
    public function getById($id);
    public function search($query, $filters);
    public function store($data);
    public function update($id, $data);
    public function delete($id);
    public function getBySlug($slug);
}

