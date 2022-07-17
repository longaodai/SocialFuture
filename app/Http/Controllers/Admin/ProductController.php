<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.pages.product.index');
    }

    /**
     * Show form create product
     *
     * @return void
     * 
     * @author longvc <vochilong.work@gmail.com>
     */
    public function create()
    {
        return view('admin.pages.product.create');
    }

    public function store(UpdateRequest $request)
    {
        
    }
}
