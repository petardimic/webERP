<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Parameters extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
				Schema::create('parameters',function($table){
				$table->string('default_date_format');
				$table->integer('first_overdue_deadline');
				$table->integer('second_overdue_deadline');
				$table->integer('default_credit_limit');
				$table->string('check_credit_limits');
				$table->string('show_settles_last_month');
				$table->text('romalpa_clause');
				$table->integer('quick_entries');
				$table->integer('frequently_ordered_items');
				$table->string('sales_order_allows_same_item_multiple_times');
				$table->string('order_entry_allows_line_item_description');
				$table->string('a_picking_note_must_be_produced_before_an_order_can_be_delivered');
				$table->string('auto_update_exchange_rates_daily');
				$table->string('source_exchange_rates_from');
				$table->string('format_of_packing_slips');
				$table->string('invoice_orientation');
				$table->string('show_company_details_on_packing_slips');
				$table->string('working_days_on_a_week');
				$table->integer('dispatch_cut_off_time');
				$table->string('allow_sales_of_zero_cost_items');
				$table->string('controlled_items_must_exist_for_crediting');
				$table->string('do_shipping_calculation');
				$table->integer('apply_shipping_charges_if_an_order_is_less_than');
				$table->string('create_debtor_codes_automatically');
				$table->string('create_supplier_codes_automatically');
				$table->text('tax_authority_reference_name');
				$table->integer('standard_cost_decimal_places');
				$table->integer('number_of_periods_of_stockusage');
				$table->string('show_order_values_on_grn');
				$table->string('check_quantity_charged_vs_deliver_qty');
				$table->string('check_price_charged_vs_order_price');
				$table->integer('allowed_over_charge_proportion');
				$table->integer('allowed_over_receive_proportion');
				$table->string('purchase_order_allows_same_item_multiple_times');
				$table->string('automatically_authorise_purchase_orders_if_user_has_authority');
				$table->string('financial_year_ends_on');
				$table->integer('report_page_length');
				$table->integer('default_maximum_number_of_records_to_show');
				$table->string('show_stockid_on_image');
				$table->integer('maximum_size_in_kb_of_uploaded_images');
				$table->integer('number_of_month_must_be_shown');
				$table->string('the_directory_where_images_are_stored');
				$table->string('the_directory_where_reports_are_stored');
				$table->string('only_allow_secure_socket_connections');
				$table->string('perform_database_maintenance_at_logon');
				$table->string('wiki_application');
				$table->text('wiki_path');
				$table->string('geocode_customers_and_suppliers');
				$table->string('extended_customer_information');
				$table->string('extended_supplier_information');
				$table->string('prohibit_gl_journals_to_control_accounts');
				$table->string('inventory_costing_method');
				$table->string('auto_issue_components');
				$table->string('prohibit_negative_stock');
				$table->integer('months_of_audit_trail_to_retain');
				$table->string('log_severity_level');
				$table->text('path_to_log_files');
				$table->string('controlled_items_defined_at_work_order_entry');
				$table->string('auto_create_work_orders');
				$table->text('factory_manager_email_address');
				$table->text('purchasing_manager_email_address');
				$table->text('inventory_manager_email_address');
				$table->string('using_smtp_mail');
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
		Schema::drop('parameters');
	}

}
