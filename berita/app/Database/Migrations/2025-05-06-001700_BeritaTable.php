<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BeritaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'auto_increment' => true],
            'title'      => ['type' => 'VARCHAR', 'constraint' => 255],
            'slug'       => ['type' => 'VARCHAR', 'constraint' => 255, 'unique' => true],
            'content'    => ['type' => 'TEXT'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'featured_image' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true,],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Berita');
    }

    public function down()
    {
        $this->forge->dropTable('berita');
    }
}
