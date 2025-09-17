<?php

namespace App\Models;

use App\Entities\Post;
use App\Libraries\UploadImage;
use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = Post::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'slug', 'content', 'type', 'category_id', 'user_id'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['UploadImage'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = ['UploadImage'];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function UploadImage(array $data)
	{
		$request = \Config\Services::request();
        if (method_exists($request, 'getFile') === false) {
            return $data;
        }
		if ($request->getFile('image')) {
			$file = $request->getFile('image');
		} elseif (isset($data['data']['image']) && is_object($data['data']['image'])) {
			$file = $data['data']['image'];
		} else {
            return $data;
        }
		$uploadFile = new UploadImage($file, [110, 110], "posts", 'EleveModel', 'image');
		if (array_key_exists('id', $data)) {
			$namefile = $uploadFile->upload($data['id'][0]);
		}	else {
			$namefile = $uploadFile->upload();
		}
		if ($namefile !== null) {
			$data['data']['image'] = $namefile;
		}
		return $data;
	}
}
