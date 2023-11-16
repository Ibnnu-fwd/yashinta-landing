<?php

namespace App\Repositories;
use App\Models\SocialMedia;
use App\Interfaces\SocialMediaInterface;
use Illuminate\Support\Facades\Storage;

class SocialMediaRepository implements SocialMediaInterface
{
    private $socialMedia;
    public function __construct(SocialMedia $socialMedia)
    {
        $this->socialMedia = $socialMedia;
    }

    public function getAll()
    {
        return $this->socialMedia->all();
    }

    public function getById($id)
    {
        return $this->socialMedia->find($id);
    }

    public function store($data)
    {
        $filename = uniqid() . '.' . $data['icon']->extension();
        $data['icon']->storeAs('public/social-media', $filename);
        $data['icon'] = $filename;

        return $this->socialMedia->create($data);
    }

    public function update($id, $data)
    {
        $socialMedia = $this->socialMedia->find($id);

        if(isset($data['icon'])){
            $filename = uniqid() . '.' . $data['icon']->extension();
            $data['icon']->storeAs('public/social-media', $filename);
            $data['icon'] = $filename;

            if ($socialMedia->icon != null) {
                Storage::delete('public/social-media/' . $socialMedia->icon);
            }
        }

        $socialMedia->update($data);
        return $socialMedia;
    }

    public function delete($id)
    {
        $socialMedia = $this->socialMedia->find($id);
        $socialMedia->delete();
        return $socialMedia;
    }
}