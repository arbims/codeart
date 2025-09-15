<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateUser extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'avatar' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'firstname' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'lastname' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'confirmation_token' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'confirmed' => [
                'type' => 'INT',
                'constraint' => '11',
                'null' => true,
            ],
            'github_url' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'facebook_id' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'github_id' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'google_id' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'role' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ]
            
        ]);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
