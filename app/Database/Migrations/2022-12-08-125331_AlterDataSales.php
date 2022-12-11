<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataSales extends Migration
{
	public function up()
	{
		$this->forge->addColumn('DataSales', [
			'slug VARCHAR(100) UNIQUE'
		]);
	}

	//--------------------------------------------------------

	public function down()
	{
		$this->forge->dropColumn('DataSales', 'slug');
	}
}