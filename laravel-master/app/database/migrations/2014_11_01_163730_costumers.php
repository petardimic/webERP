<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Costumers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('costumers',function($table){
				$table->string('costumer_name');
				$table->text('costumer_address');
				$table->string('country')->nullable();
				$table->string('costumer_type');
				$table->string('discount_percentage');
				$table->string('Discount_code');
				$table->timestamps();
				});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('costumers');
	}

}
