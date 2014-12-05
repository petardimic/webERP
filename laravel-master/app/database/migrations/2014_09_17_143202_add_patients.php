<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPatients extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('patients')->insert(array(
					'name' => 'yash',
					'age' => '20',
					'phone' => '10'
					));
		DB::table('patients')->insert(array(
					'name' => 'patel',
					'age' => '20',
					'phone' => '01'
					));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('patients')->where('name','=','yash')->delete();
		DB::table('patients')->where('name','=','patel')->delete();
	}

}
