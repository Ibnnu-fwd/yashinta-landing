<?php

namespace App\Repositories;

use App\Interfaces\SocialActivityInterface;
use App\Models\SocialActivities;

class SocialActivityRepository implements SocialActivityInterface
{
    private $socialActivity;

    public function __construct(SocialActivities $socialActivity)
    {
        $this->socialActivity = $socialActivity;
    }

    public function getAll()
    {
        return $this->socialActivity->all();
    }

    public function getById($id)
    {
        return $this->socialActivity->find($id);
    }

    public function store($data)
    {
        return $this->socialActivity->create($data);
    }

    public function update($id, $data)
    {
        return $this->socialActivity->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->socialActivity->find($id)->delete();
    }
}
