<?php namespace App\Awesome;

use DB;

abstract class DbRepository {

    public function all()
    {
        return $this->model->all();
    }

    public function one($id)
    {
        return $this->model->find($id);
    }

    public function where($property, $operator, $value)
    {
        return $this->model->where($property, $operator, $value)->get();
    }

    public function update($input, $id)
    {
        $model = $this->model->find($id);
        $model->update($input);
        $model->save();
        return $model;
    }

    public function store($input)
    {
        return $this->model->firstOrCreate($input);
    }

    public function destroy($id)
    {
        return $this->model->destroy($id);
    }

}