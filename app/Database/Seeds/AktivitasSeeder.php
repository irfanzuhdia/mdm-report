<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AktivitasSeeder extends Seeder
{
	public function run()
	{
		//
		$data = [
			[
				'username'      =>  'user1',
				'proyek'		=> 	'proyek1',
				'lokasi'		=> 	'lokasi1',
				'aktivitas'		=>	'aktivitas1',
				'created_at' => Time::now()
			],
			[
				'username'      =>  'user2',
				'proyek'		=> 	'proyek2',
				'lokasi'		=> 	'lokasi2',
				'aktivitas'		=>	'aktivitas2',
				'created_at' => Time::now()
			]
		];
		$this->db->table('aktivitas')->insertBatch($data);
	}
}
