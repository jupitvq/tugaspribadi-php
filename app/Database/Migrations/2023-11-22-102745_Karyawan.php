<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nik'       => [
				'type'           => 'INT',
				'constraint'     => '16'
			],
			'nama'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 200,
			],
            'jabatan'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 30,
			],
            'alamat'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'no_telepon' => [
				'type'           => 'VARCHAR',
				'constraint'     => 20,
			],
            'bank'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 30,
			],
            'no_rekening'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 30,
            ],
            'gaji'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'status'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 10,
            ],
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('karyawans', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('karyawans');
    }
}
