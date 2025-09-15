<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Config\Factories;

class PostsController extends BaseController
{

    private $postModel;

    public function __construct()
    {
        $this->postModel = Factories::models('PostModel');
    }

    public function index()
    {
        return view('posts/index');
    }
}