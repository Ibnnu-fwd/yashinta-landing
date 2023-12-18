<?php

namespace App\Repositories;
use App\Models\Testimonial;
use App\Interfaces\TestimonialInterface;
use Illuminate\Support\Facades\Storage;

class TestimonialRepository implements TestimonialInterface
{
    private $testimonial;
    public function __construct(Testimonial $testimonial)
    {
        $this->testimonial = $testimonial;
    }

    public function getAll()
    {
        return $this->testimonial->all();
    }

    public function getById($id)
    {
        return $this->testimonial->find($id);
    }

    public function store($data)
    {
        $filename = uniqid() . '.' . $data['image']->extension();
        $data['image']->storeAs('public/testimonial', $filename);
        $data['image'] = $filename;

        return $this->testimonial->create($data);
    }

    public function update($id, $data)
    {
        $testimonial = $this->testimonial->find($id);

        if(isset($data['image'])){
            $filename = uniqid() . '.' . $data['image']->extension();
            $data['image']->storeAs('public/testimonial', $filename);
            $data['image'] = $filename;

            if ($testimonial->image != null) {
                Storage::delete('public/testimonial/' . $testimonial->image);
            }
        }

        $testimonial->update($data);
        return $testimonial;
    }

    public function delete($id)
    {
        $testimonial = $this->testimonial->find($id);
        $testimonial->delete();
        return $testimonial;
    }
}
