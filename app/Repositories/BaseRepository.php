<?php

namespace App\Repositories;
use Illuminate\Container\Container as App;


class BaseRepository {

    protected $model;

    public function __construct(App $app)
    {
        $this->model = $app->make($this->model());
        //$this->middleware('auth');
    }


    public function all() {
        
        return  $this->model::all();

    }

    public function create($fields) {

        return $this->model::create($fields);
        
    }

    public function update($id, $fields) {

        return $this->model::where('id', $id)->update($fields);
        
    }

    public function delete($id) {

        return $this->model::where('id', $id)->delete();
        
    }

    /**
     * Find data by id
     *
     * @param  int  $id
     * @param  array  $columns
     * @return mixed
     */
    public function find($id, $columns = ['*'])
    {
        $data = $this->model::find($id, $columns);

        return $data;
    }

    public function criteria($columns = ['*'], $conditions = array()) 
    {
        $data = $this->model::where($conditions)->get($columns);
        return $data;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }
}