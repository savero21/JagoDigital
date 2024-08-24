<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbDpcTable extends Migration
{
    public function up()
    {
        // Membuat tabel tb_dpc
        $this->forge->addField([
            'id_dpc' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_dpd' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => false,
            ],
            'nama_dpc' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'wilayah_kerja_dpc' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('id_dpc', true); // Primary key
        $this->forge->createTable('tb_dpc');  // Membuat tabel
    }

    public function down()
    {
        // Menghapus tabel tb_dpc
        $this->forge->dropTable('tb_dpc');
    }
}
