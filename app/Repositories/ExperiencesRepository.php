<?php

namespace App\Repositories;

use App\Models\Experiences;
use App\Interfaces\ExperiencesInterface;
use Illuminate\Support\Facades\Storage;

class ExperiencesRepository implements ExperiencesInterface{
    private $experiences;

    public function __construct(Experiences $experiences){
        $this->experiences = $experiences;
    }

    public function getAll(){
        return $this->experiences->all();
    }

    public function getById($id){
        return $this->experiences->find($id);
    }

    public function store($data){
        return $this->experiences->create($data);
    }

    public function update($id, $data){
        return $this->experiences->find($id)->update($data);
    }
    
    public function delete($id){
        return $this->experiences->find($id)->delete();
    }
}
