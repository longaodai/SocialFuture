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
        $this->thisModel('where', 'id', '=', 1);

        $this->thisModel('where', 'name', '!=', '');
        
        return parent::filter();
    }

    public function all($data = null)
    {
        return parent::all();
    }
}