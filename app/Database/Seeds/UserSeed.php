<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserSeed extends Seeder
{
    public function run()
    {
		$userModel = new UserModel();
		$data = [
			'username' => 'admin',
			'email' => 'admin@gmail.com',
			'password' => 'admin',
		];
		$userModel->skipValidation(true);
		$userModel->save($data);
    }
}