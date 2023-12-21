<?php

namespace App\Interfaces;

interface ProgramInterface
{
    public function getAll();
    public function getById($id);
    public function store($request);
    public function update($id, $request);
    public function destroy($id);
}