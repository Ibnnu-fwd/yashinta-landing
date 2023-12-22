<?php

namespace App\Repositories;

use App\Models\ProfileSection;
use App\Interfaces\ProfileSectionInterface;
use Illuminate\Support\Facades\Storage;

class ProfileSectionRepository implements ProfileSectionInterface
{
    private $profileSection;

    public function __construct(ProfileSection $profileSection)
    {
        $this->profileSection = $profileSection;
    }

    public function getAll()
    {
        return $this->profileSection->orderBy('created_at', 'asc')->get();
    }

    public function getById($id)
    {
        return $this->profileSection->find($id);
    }

    public function store($data)
    {
        if (isset($data['image'])) {
            $filename = uniqid() . '.' . $data['image']->extension();
            $data['image']->storeAs('public/profile', $filename);
            $data['image'] = $filename;
        }
        

        return $this->profileSection->create($data);
    }

    public function update($id, $data)
    {
        $profileSection = $this->profileSection->find($id);

        if (isset($data['image'])) {
            $filename = uniqid() . '.' . $data['image']->extension();
            $data['image']->storeAs('public/profile', $filename);
            $data['image'] = $filename;
        }

        return $profileSection->update($data);
    }

    public function destroy($id)
    {
        $profileSection = $this->profileSection->find($id);

        if (isset($profileSection->image)) {
            Storage::delete('public/profile/' . $profileSection->image);
        }

        return $profileSection->delete();
    }
    
}
