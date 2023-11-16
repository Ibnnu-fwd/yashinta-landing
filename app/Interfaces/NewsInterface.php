<?php

namespace App\Interfaces;

interface NewsInterface
{
    public function getAll();
    public function getById($id);
    public function store($data);
    public function update($id, $data);
    public function delete($id);
    public function getBySlug($slug);
}

