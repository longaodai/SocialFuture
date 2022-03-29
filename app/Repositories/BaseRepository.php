<?php

namespace App\Repositories;

use Faker\Core\Number;

abstract class  BaseRepository
{
    protected $app;
    protected $result;

    public function __construct()
    {
        // $this->app = $app;
    }

    /**
     * @param null $params
     */
    public function all($params = null)
    {
        $this->filter($params);

        return $this->result->all();
    }

    /**
     * @param null $params
     */
    public function getList($params = null)
    {
        $this->filter($params);
        
        return $this->result->paginate($this->getPagination($params));
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
        return $this->app->store($params);
    }

    /**
     * @param null $params
     */
    public function update($params = null, $options = null)
    {
        $this->mark($options);

        return $this->result->update($params);
    }

    /**
     * @param null $params
     */
    public function getFirstBy($params = null)
    {
        $this->filter($params);

        return $this->result->first();
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
        
        return $this->result->delete();
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