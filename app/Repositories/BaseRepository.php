<?php

namespace App\Repositories;

abstract class  BaseRepository
{
    protected $app;
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function setModel()
    {
        return $this->model = $this->app->newQuery();
    }

    public function thisModel($query, $key = null, $condition = null, $value = null)
    {
        return $this->model->{$query}($key, $condition, $value);
    }

    /**
     * @param null $params
     */
    public function all($params = null)
    {
        $this->filter($params);

        return $this->model->get();
    }

    /**
     * @param null $params
     */
    public function getList($params = null)
    {
        $this->filter($params);
        
        return $this->model->paginate($this->getPagination($params));
    }

    private function getPagination($params)
    {   
        if (empty($params)) return PAGINATION_PAGE_DEFAULT;

        return !empty($params->get('set_pagination')) 
            ? $params->get('set_pagination') : PAGINATION_PAGE_DEFAULT;
    }

     /**
     * @param null $params
     */
    public function store($params = null)
    {
        return $this->app->create($params);
    }

    /**
     * @param null $params
     */
    public function update($params = null, $options = null)
    {
        return $this->model->update($params);
    }

    /**
     * @param null $params
     */
    public function getFirstBy($params = null)
    {
        $this->filter($params);

        return $this->model->first();
    }

     /**
     * @param null $params
     */
    public function show($params = null)
    {
        return $this->app->find($params);
    }

    /**
     * @param null $data
     */
    public function delete($data = null, $options = null)
    {
        $this->filter($data);

        return $this->model->delete();
    }

    /**
     * @param null $params
     */
    public function insert($params = null)
    {
        return $this->app->insert($params);
    }

    /**
     * @param null $params
     */
    public function filter($params = null)
    {
        return $this;
    }

    /**
     * @param null $params
     */
    public function mark($params = null)
    {
        return $this;
    }
}