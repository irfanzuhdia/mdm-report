<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Aset extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_aset'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_aset'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'jumlah'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'lokasi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('id_aset');
		$this->forge->createTable('aset');
	}
	

	public function down()
	{
		//
		$this->forge->dropTable('asets');
	}
}
