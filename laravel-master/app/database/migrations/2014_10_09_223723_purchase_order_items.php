<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PurchaseOrderItems extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_order_items',function($table){
				$table->increments('id');
				$table->text('purchase_order_id');
				$table->text('item');
				$table->text('quantity');
				});
	}

				/**
				 * Reverse the migrations.
				 *
				 * @return void
				 */
	public function down()
	{
		Schema::drop('purchase_order_items');
	}

}
