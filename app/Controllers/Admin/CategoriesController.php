<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Config\Factories;

class CategoriesController extends BaseController
{

    private $categoryModel;

    public function __construct()
    {
        $this->categoryModel = Factories::models('CategoryModel');
    }
    
    public function index()
    {
        $categories = $this->categoryModel->findAll();
        return view('admin/categories/index', compact('categories'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $data = $this->request->getPost();
            if ($this->categoryModel->insert($data) == false) {
                return redirect()->back()->with('errors' , $this->categoryModel->errors())->withInput();
            }
            return redirect()->to('/admin/categories')->with('success', 'Ajout avec success');
        }
        return view('admin/categories/add');
    }

    public function edit(int $id) {
        $category = $this->categoryModel->find($id);
        if ($this->request->is('put')) {
            $data = $this->request->getPost();
            $this->categoryModel->update($id, $data);
            return redirect()->to('/admin/categories')->with('success', 'Updated success');
        }
        return view('admin/categories/edit', compact('category'));
    }

    public function delete(int $id) {
        //$category = $this->categoryModel->find($id);
        $this->categoryModel->delete($id);
        return redirect()->to('/admin/categories')->with('error', 'Delete Success');
    }
}