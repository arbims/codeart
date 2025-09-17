<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Entities\Post;
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
        $posts = $this->postModel->findAll();
        return view('admin/posts/index', compact('posts'));
    }

    public function add()
    {
        $post = new Post();
        if ($this->request->is('post')) {
            $data = $this->request->getPost();
            $data['user_id'] = 1;
            if ($this->postModel->insert($data) == false) {
                return redirect()->back()->with('errors' , $this->postModel->errors())->withInput();
            }
            return redirect()->to('/admin/posts')->with('success', 'Ajout avec success');
        }
        return view('admin/posts/add', compact('post'));
    }

    public function edit(int $id) {
        $post = $this->postModel->find($id);
        if ($this->request->is('put')) {
            $data = $this->request->getPost();
            $this->postModel->update($id, $data);
            return redirect()->to('/admin/posts')->with('success', 'Updated success');
        }
        return view('admin/posts/edit', compact('post'));
    }

    public function delete(int $id) {
        //$post = $this->postModel->find($id);
        $this->postModel->delete($id);
        return redirect()->to('/admin/posts')->with('error', 'Delete Success');
    }
}