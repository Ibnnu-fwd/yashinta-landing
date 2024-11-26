<?php

namespace App\Interfaces;

interface AspirationInterface
{
    public function getAll();
    public function getLast30Days();
    public function getById($id);
    public function store($data);
    public function update($id, $data);
    public function delete($id);
}