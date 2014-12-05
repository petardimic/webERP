<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Locations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
				Schema::create('locations',function($table){
				$table->text('location_code');
				$table->text('location_name');
				$table->text('contact_for_deliveries');
				$table->text('delivery_address_1');
				$table->text('delivery_address_2');
				$table->text('delivery_address_3');
				$table->text('delivery_address_4');
				$table->text('delivery_address_5');
				$table->text('country')->nullable();
				$table->text('telephone');
				$table->text('facsimile');
				$table->text('email');
				$table->text('tax');
				$table->text('default_counter_sales_customer_code');
				$table->text('counter_sales_branch_code');
				$table->text('allow_internal_requests');
				});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locations');
	}

}
