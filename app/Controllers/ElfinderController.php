<?php

namespace App\Controller;

use App\Controllers\BaseController;

class ElfinderController extends BaseController
{   
    public function index()
    {
    }

    public function connect() {
        require dirname(__DIR__) . '/lib/elfinder/connector.php';
    }
}