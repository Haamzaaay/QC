<?php

namespace App\Repositories;

use App\Models\TestQuotePolicy;
use App\Repositories\Interfaces\TestQuoteRepoRepositoryInterface;

class TestQuoteRepoRepository implements TestQuoteRepoRepositoryInterface
{
    protected $model;

    // Constructor to bind model to repo
    public function __construct(TestQuotePolicy $model)
    {
        $this->model = $model;
    }

    // Get all instances of model
    public function all()
    {
        return $this->model->all();
    }

    // create a new record in the database
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    // update record in the database
    public function find($id)
    {
        return $this->model->find($id);
    }

    // update record in the database
    public function update(array $data, $id)
    {
        $record = $this->model->find($id);
        return $record->update($data);
    }

    // remove record from the database
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    // show the record with the given id
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    // Get the associated model
    public function getModel()
    {
        return $this->model;
    }

    // Set the associated model
    public function setModel($model)
    {
        $this->model = $model;
       
    }

    // Eager load database relationships
    public function with($relations)
    {
        return $this->model->with($relations);
    }
}
