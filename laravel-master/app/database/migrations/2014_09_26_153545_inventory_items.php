<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InventoryItems extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
				Schema::create('inventory_items', function($table){
				$table->string('item_code');
				$table->text('part_descriptions')->nullable();
				$table->text('bahasa_indonesia_description');
				$table->text('part_description');
				$table->text('image_file');
				$table->text('category');
				$table->integer('economic_order_quantity');
				$table->integer('packaged_volume');
				$table->integer('packaged_gross_weight');
				$table->integer('net_weight');
				$table->text('units_of_measure');
				$table->text('assembly_kit');
				$table->text('current_or_obsolete');
				$table->text('batch_serial_or_lot_control');
				$table->text('serialised');
				$table->text('perishable');
				$table->integer('decimal_places_for_display_quantity');
				$table->text('bar_code');
				$table->text('discount_category');				
				$table->integer('pan_size');
				$table->integer('shrinkage_factor');
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
		Schema::drop('inventory_items');
	}

}
