<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTransaksiKartu extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'konter_id' => [
				'type' => 'INT',
				'unsigned' => true,
				'constraint' => '1',
			],
			'produk_id' => [
				'type' => 'INT',
				'unsigned' => true,
				'constraint' => '3',
			],
			'trx_kartu_qty' => [
				'type' => 'INT',
				'constraint' => '4',
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
		$this->forge->addForeignKey('produk_id', 'produk', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('konter_id', 'konter', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('transaksi_kartu');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('transaksi_kartu');
	}
}
