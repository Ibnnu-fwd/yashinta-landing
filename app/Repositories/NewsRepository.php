<?php

namespace App\Repositories;

use App\Models\News;
use App\Interfaces\NewsInterface;
use Illuminate\Support\Facades\Storage;

class NewsRepository implements NewsInterface
{
    private $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }

    public function getAll()
    {
        return $this->news->orderBy('published_date', 'desc')->get();
    }

    public function paginate($number)
    {
        return $this->news->orderBy('published_date', 'desc')->paginate($number);
    }

    public function getById($id)
    {
        return $this->news->find($id);
    }

    public function store($data)
    {
        $filename = uniqid() . '.' . $data['thumbnail']->extension();
        $data['thumbnail']->storeAs('public/news', $filename);
        $data['thumbnail'] = $filename;

        $data['slug'] = $this->generateSlug($data['title']);

        return $this->news->create($data);
    }

    public function search($query, $filters)
    {
        $queryBuilder = $this->news->query();

        // Basic search by title or content
        if ($query) {
            $queryBuilder->where(function ($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                ->orWhere('tag', 'like', "%{$query}%")
                ->orWhereHas('commitmentRelated', function ($q) use ($query) {
                    $q->where('title', 'like', "%{$query}%");
                });
            });
        }
    
        // Apply category filter if it exists
        if (!empty($filters)) {
            foreach ($filters as $field => $value) {
                $queryBuilder->where($field, $value);
            }
        }
    
        return $queryBuilder->orderBy('published_date', 'desc')->paginate(10);
    }

    private function generateSlug($title)
    {
        $slug = str_replace(' ', '-', strtolower($title));
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);
        $slug = preg_replace('/-+/', '-', $slug);

        // check slug exist
        $slugExist = $this->news->where('slug', $slug)->first();

        if ($slugExist) {
            $slug = $slug . '-' . uniqid();
        }

        return $slug;
    }

    public function update($id, $data)
    {
        $news = $this->news->find($id);

        if (isset($data['thumbnail'])) {
            $filename = uniqid() . '.' . $data['thumbnail']->extension();
            $data['thumbnail']->storeAs('public/news', $filename);
            $data['thumbnail'] = $filename;

            if ($news->thumbnail != null) {
                Storage::delete('public/news/' . $news->thumbnail);
            }
        }

        $data['slug'] = $this->generateSlug($data['title']);

        $news->update($data);
        return $news;
    }

    public function delete($id)
    {
        $news = $this->news->find($id);
        $news->delete();
        return $news;
    }

    public function getBySlug($slug)
    {
        return $this->news->where('slug', $slug)->first();
    }
}
