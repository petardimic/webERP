

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryMaintenance extends Migration {
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales_category_maintenance',function($table){
		$table->increments('id');
		$table->text('sub_category');
		$table->text('active');
		$table->text('select');
		$table->text('edit');
		$table->text('delete');
		$table->text('image');
		

	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sales_category_maintenance');
	}

}
