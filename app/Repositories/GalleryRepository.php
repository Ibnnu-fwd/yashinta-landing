<?php

namespace App\Repositories;
use App\Models\Gallery;
use App\Interfaces\GalleryInterface;
use Illuminate\Support\Facades\Storage;

class GalleryRepository implements GalleryInterface
{
    private $gallery;

    public function __construct(Gallery $gallery){
        $this->gallery = $gallery;
    }

    public function getAll(){
        return $this->gallery->all();
    }

    public function getById($id){
        return $this->gallery->find($id);
    }

    public function store($data){
        $filename = uniqid() . '.' . $data['thumbnail']->extension();
        $data['thumbnail']->storeAs('public/gallery', $filename);
        $data['thumbnail'] = $filename;

        return $this->gallery->create($data);
    }

    public function update($data, $id){
        $gallery = $this->gallery->find($id);

        if(isset($data['thumbnail'])){
            $filename = uniqid() . '.' . $data['thumbnail']->extension();
            $data['thumbnail']->storeAs('public/gallery', $filename);
            $data['thumbnail'] = $filename;

            if ($gallery->thumbnail != null) {
                Storage::delete('public/gallery/' . $gallery->thumbnail);
            }
        }

        $gallery->update($data);
        return $gallery;
    }

    public function delete($id){
        $gallery = $this->gallery->find($id);
        $gallery->delete();
        return $gallery;
    }
}
