<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PurchaseOrders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_orders',function($table){
		$table->increments('id');
		$table->text('location');
		$table->text('supplier');
		$table->text('order_date');
		$table->text('comments');
		$table->text('user');
		$table->text('delivery_status');
		$table->text('bill');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchase_orders');
	}

}
