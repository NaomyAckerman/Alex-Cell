<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddKonter extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'				=> 'INT',
				'unsigned' 			=> true,
				'auto_increment' 	=> true,
				'constraint' 		=> '1',
			],
			'konter_nama' => [
				'type'				=> 'VARCHAR',
				'constraint' 		=> '128'
			],
			'konter_gambar' => [
				'type'				=> 'VARCHAR',
				'constraint' 		=> '128'
			],
			'konter_email' => [
				'type' 				=> 'VARCHAR',
				'constraint' 		=> '128',
			],
			'konter_no_telp' => [
				'type'				=> 'VARCHAR',
				'constraint' 		=> '13',
			],
			'created_by' => [
				'type' 			=> 'INT',
				'null'		=> true,
			],
			'updated_by' => [
				'type' 			=> 'INT',
				'null'		=> true,
			],
			'deleted_by' => [
				'type' 			=> 'INT',
				'null'		=> true,
			],
			'created_at' => [
				'type'				=> 'DATETIME',
			],
			'updated_at' => [
				'type'				=> 'DATETIME',
			],
			'deleted_at' => [
				'type'				=> 'DATETIME',
				'null'		=> true,
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('konter');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('konter');
	}
}
