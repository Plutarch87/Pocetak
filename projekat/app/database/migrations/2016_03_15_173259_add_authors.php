<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('apartments')->insert(array(
			'name' => 'Apartman Kralj',
			'descr' => 'Moderan apartman u centru grada.',
			'created_at' =>date('Y-m-d H:m:s'),
			'updated_at' =>date('Y-m-d H:m:s')
		));

		DB::table('apartments')->insert(array(
			'name' => 'Vila Marko',
			'descr' => 'Miran apartman na periferiji grada.',
			'created_at' =>date('Y-m-d H:m:s'),
			'updated_at' =>date('Y-m-d H:m:s')
		));

		DB::table('apartments')->insert(array(
			'name' => 'Bungalov Monsun',
			'descr' => 'Egzotican apartman na par kilometara od grada.',
			'created_at' =>date('Y-m-d H:m:s'),
			'updated_at' =>date('Y-m-d H:m:s')
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('apartments')->where('name', '=', 'Apartman Kralj')->delete();
		DB::table('apartments')->where('name', '=', 'Vila Marko')->delete();
		DB::table('apartments')->where('name', '=', 'Bungalov Monsun')->delete();
	}

}
