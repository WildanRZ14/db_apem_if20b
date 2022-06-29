<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DBSar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
            ],
            'nama_pelapor'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'telpon_pelapor'=>[
                'type'=>'TEXT',
            ],
            'lokasi_kejadian'=>[
                'type'=>'TEXT',
            ],
            'tanggal_kejadian'=>[
                'type'=>'TEXT',
            ],
            'isi_laporan'=>[
                'type'=>'TEXT',
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('sar');
 }

    public function down()
    {
        $this->forge->dropTable('sar');
    }
}
