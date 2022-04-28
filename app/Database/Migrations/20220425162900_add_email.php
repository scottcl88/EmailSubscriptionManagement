<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddEmails extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'email_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => '65535',
            ]
        ]);
        $this->forge->addKey('email_id', true);
        $this->forge->createTable('emails');
    }

    public function down()
    {
        $this->forge->dropTable('emails');
    }
}