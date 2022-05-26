<?php

namespace App\Repositories\Interfaces;

interface CompanyPolicyRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function updateOrCreate(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);

    public function find($id);

    public function getModel();

    public function with($relations);
}
