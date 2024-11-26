<?php

namespace App\Interfaces;

interface AgendaInterface
{
    public function getAll();
    public function getPast();
    public function getUpcoming();
    public function getById($id);
    public function store($data);
    public function update($id, $data);
    public function delete($id);
}