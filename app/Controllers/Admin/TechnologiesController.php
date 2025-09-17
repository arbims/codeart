<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Config\Factories;

class TechnologiesController extends BaseController
{

    use ResponseTrait;

    private $technologyModel;

    public function __construct()
    {
        $this->technologyModel = Factories::models('technologyModel');
    }
    
    public function index()
    {
        $technologies = $this->technologyModel->findAll();
        return view('admin/technologies/index', compact('technologies'));
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $data = $this->request->getPost();
            if ($this->technologyModel->insert($data) == false) {
                return redirect()->back()->with('errors' , $this->technologyModel->errors())->withInput();
            }
            return redirect()->to('/admin/technologies')->with('success', 'Ajout avec success');
        }
        return view('admin/technologies/add');
    }

    public function edit(int $id) {
        $technology = $this->technologyModel->find($id);
        if ($this->request->is('put')) {
            $data = $this->request->getPost();
            $this->technologyModel->update($id, $data);
            return redirect()->to('/admin/technologies')->with('success', 'Updated success');
        }
        return view('admin/technologies/edit', compact('technology'));
    }

    public function delete(int $id) {
        //$post = $this->technologyModel->find($id);
        $this->technologyModel->delete($id);
        return redirect()->to('/admin/technologies')->with('error', 'Delete Success');
    }

    public function getTechnologies()
    {
        $search = $this->request->getGet('q');
        $result = $this->technologyModel->like('name', $search)->get()->getResult();
        return $this->respondCreated($result);
    }
}