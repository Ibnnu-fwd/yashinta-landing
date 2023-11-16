<?php

namespace App\Repositories;
use App\Models\News;
use App\Interfaces\NewsInterface;
use Illuminate\Support\Facades\Storage;

class NewsRepository implements NewsInterface
{
    private $news;

    public function __construct(News $news){
        $this->news = $news;
    }

    public function getAll(){
        return $this->news->orderBy('published_date', 'desc')->get();
    }

    public function getById($id){
        return $this->news->find($id);
    }

    public function store($data){
        $filename = uniqid() . '.' . $data['thumbnail']->extension();
        $data['thumbnail']->storeAs('public/news', $filename);
        $data['thumbnail'] = $filename;

        return $this->news->create($data);
    }

    public function update($id, $data){
        $news = $this->news->find($id);

        if(isset($data['thumbnail'])){
            $filename = uniqid() . '.' . $data['thumbnail']->extension();
            $data['thumbnail']->storeAs('public/news', $filename);
            $data['thumbnail'] = $filename;

            if ($news->thumbnail != null) {
                Storage::delete('public/news/' . $news->thumbnail);
            }
        }

        $news->update($data);
        return $news;
    }

    public function delete($id){
        $news = $this->news->find($id);
        $news->delete();
        return $news;
    }

    public function getBySlug($slug){
        return $this->news->where('slug', $slug)->first();
    }
}