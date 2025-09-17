<?php

namespace App\Libraries;

use CodeIgniter\Config\Factories;
use CodeIgniter\HTTP\Files\UploadedFile;
use Intervention\Image\ImageManagerStatic;
use \AllowDynamicProperties;

#[AllowDynamicProperties]
class UploadImage
{

	private $file;
	private $dimention;
	private $folderName;
	private $modelName;
	private $field;
	public function __construct(UploadedFile $file, array $dimention, $folderName, $modelName, $field)
	{
		$this->file = $file;
		$this->dimention = $dimention;
		$this->folderName = $folderName;
		$this->modelName = $modelName;
		$this->field = $field;
	}

	public function upload($id = null)
	{
		$width = $this->dimention[0];
		$height = $this->dimention[1];
		if (is_object($this->file) && !empty($this->file->getClientName())) {
			$path = ROOTPATH . "public/uploads/$this->folderName/";
			if (!is_null($id)) {
				$entityModel = Factories::models("App\\Domain\\Models\\" . $this->modelName);
				$entity = $entityModel->select()->where('id', $id)->first();
				if ($entity->{$this->field} !== null && $entity->{$this->field} !== '') {
					if (file_exists($path . $entity->{$this->field})) {
						unlink($path . $entity->{$this->field});
					}
				}
			}
			if (!file_exists($path)) {
				mkdir($path, 0777, true);
			}
			$ext = $this->file->getExtension();
			$namefile = ($id !== null) ? md5($id) . '.' . $ext : md5(uniqid(60)) . '.' . $ext;
			if ($ext == 'svg') {
				$this->file->move($path, $namefile);
			} else {
				if ($height) {
					ImageManagerStatic::make($this->file->getRealPath())->resize($width, $height)->save($path . $namefile);
				} else {
					ImageManagerStatic::make($this->file->getRealPath())->resize($width, null, function ($constraint) {
						$constraint->aspectRatio();
					})->save($path . $namefile);
				}
			}
			chmod($path . $namefile, 0777);
			return $namefile;
		}
	}
}