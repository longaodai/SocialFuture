<?php

namespace App\Repositories\Categories;

use App\Models\Categories;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function __construct(Categories $app)
    {
        $this->app = $app;
        
        parent::__construct();
    }

    public function getList($data = null, $options = null)
    {
        return parent::getList();
    }

    public function filter($params = null)
    {
        $data = $this->app->where('id', 2);

        $this->result = $data;

        return parent::filter();
    }
}