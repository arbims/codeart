<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Post extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    public function caregories_list() {
        $categories = [];
        $db      = \Config\Database::connect();
        $result = $db->table('categories')->select(['id','name'])->get()->getResult();
        foreach($result as $v) {
            $categories[$v->id] = $v->name;
        }
        return $categories;
    }

    public function technologies_list() {
        $technologies = [];
        $db      = \Config\Database::connect();
        $result = $db->table('technologies')->select(['id','name'])->get()->getResult();
        foreach($result as $v) {
            $technologies[$v->id] = $v->name;
        }
        return $technologies;
    }

    public function selected_techno() {
        $technologies = [];
        $db      = \Config\Database::connect();
        $result = $db->table('posts_technologies')->select(['technology_id'])->where('post_id', $this->id)->get()->getResult();
        foreach($result as $v) {
            $technologies[$v->technology_id] = $v->technology_id;
        }
        return $technologies;
    }
}
