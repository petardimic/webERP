<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Suppliers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
		public function up()
	{
		Schema::create('suppliers',function($table){
		$table->increments('id');
		$table->text('supplier_name');
		$table->text('add_line1');
		$table->text('add_line2');
		$table->text('add_line3');
		$table->text('add_line4');
		$table->text('add_line5');
		$table->text('country');
		$table->integer('telephone');
		$table->integer('facsimile');
		$table->text('email');
		$table->text('url');
		$table->text('supplier_type');
		$table->text('supplier_since');
		$table->text('bank_particulars');
		$table->integer('bank_reference');
		$table->integer('bank_acc_number');
		$table->text('payment_terms');
		$table->text('factor_company');
		$table->text('tax_reference');
		$table->text('supplier_currency');
		$table->text('remittance_advice');
		$table->text('tax_group');

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
