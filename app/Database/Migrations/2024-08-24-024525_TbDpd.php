<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbDpdTable extends Migration
{
    public function up()
    {
        // Membuat tabel tb_dpd
        $this->forge->addField([
            'id_dpd' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_dpd' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('id_dpd', true); // Primary key
        $this->forge->createTable('tb_dpd');  // Membuat tabel
    }

    public function down()
    {
        // Menghapus tabel tb_dpd
        $this->forge->dropTable('tb_dpd');
    }
}
