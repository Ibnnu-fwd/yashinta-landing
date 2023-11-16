<?php

namespace App\Interfaces;

interface GalleryInterface
{
    public function getAll();
    public function getById($id);
    public function store($data);
    public function update($data, $id);
    public function delete($id);
}

