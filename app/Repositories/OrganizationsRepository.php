<?php

namespace App\Repositories;
use App\Models\Organizations;
use App\Interfaces\OrganizationsInterface;

class OrganizationsRepository implements OrganizationsInterface
{
    private $organizations;

    public function __construct(Organizations $organizations)
    {
        $this->organizations = $organizations;
    }

    public function getAll()
    {
        return $this->organizations->all();
    }

    public function getById($id)
    {
        return $this->organizations->find($id);
    }

    public function store($request)
    {
        return $this->organizations->create($request);
    }

    public function update($id, $request)
    {
        $data = $this->organizations->find($id);
        return $data->update($request);
    }

    public function destroy($id)
    {
        $data = $this->organizations->find($id);
        return $data->delete();
    }
}