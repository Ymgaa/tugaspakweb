<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataSales extends Seeder
{
	public function run()
	{
		// membuat data
		$DataSales_data = [
			[
				'title' => 'Selamat datang di Codeigntier',
				'slug'  => 'codeigniter-intro',
				'content' => 'Pengenalan Codeigniter untuk Pemula.'
			],
			[
				'title' => 'Hello World',
				'slug' => 'hello-world',
				'content' => 'Hello World, ini contoh artikel'
			],
			[
				'title' => 'Meetup komunitas Codeigniter Indonesia',
				'slug'	=> 'codeigniter-meetup',
				'content' => 'Seru sekali meetup perdana komunitas codeigniter..'
			]
		];

		foreach($DataSales_data as $data){
			// insert semua data ke tabel
			$this->db->table('DataSales')->insert($data);
		}

	}
}