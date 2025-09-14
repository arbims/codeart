<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class CategoriesController extends BaseController
{

    public function __construct()
    {

    }
    
    public function index()
    {
        $categories = [];
        return view('admin/categories/index', compact('categories'));
    }

    public function add()
    {
        
    }
}