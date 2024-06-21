<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peminjaman extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id_peminjaman'                => [
                'type'              => 'BIGINT',
                'constraint'        => 20,
                'unsigned'          => TRUE,
                'auto_increment'    => TRUE
            ],
            'id_aset'            => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
                'null'              => TRUE
            ],
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',				
				'unsigned'       => true,
                'null'              => TRUE
			],

            'tgl_peminjaman'              => [
                'type'              => 'DATE',
				'unsigned'       => null,
            ],
			
            'tgl_pengembalian'              => [
                'type'              => 'DATE',
				'unsigned'       => null,

            ],

		]);
		$this->forge->addPrimaryKey('id_peminjaman');

//        $this->forge->addKey('peminjaman_id', TRUE);
//        $this->forge->addForeignKey('product_id','products','product_id','CASCADE','CASCADE');
        $this->forge->createTable('peminjaman');    
	}
	

	public function down()
	{
		//
	}
}
