<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Aktivitas extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_aktivitas'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'proyek'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'lokasi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'aktivitas'       => [
				'type'           => 'TEXT',
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
		$this->forge->addPrimaryKey('id_aktivitas');
		$this->forge->createTable('aktivitas');
	}
	

	public function down()
	{
		//
		$this->forge->dropTable('aktivitas');
	}
}
