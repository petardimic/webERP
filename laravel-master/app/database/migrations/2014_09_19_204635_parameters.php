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
		Schema::create('parameters', function($table){
				$table->text('default_date_format');
				$table->integer('first_overdue_deadline');
				$table->integer('second_overdue_deadline');
				$table->integer('default_credit_limit');
				$table->text('check_credit_limits');
				$table->text('show_settles_last_month');
				$table->text('romalpa_clause');
				$table->integer('quick_entries');
				$table->integer('frequently_ordered_items');
				$table->text('sales_order_allows_same_item_multiple_times');
				$table->text('order_entry_allows_line_item_description');
				$table->text('a_picking_note_must_be_produced_before_an_order_can_be_delivered');
				$table->text('auto_update_exchange_rates_daily');
				$table->text('source_exchange_rates_from');
				$table->text('format_of_packing_slips');
				$table->text('invoice_orientation');
				$table->text('show_company_details_on_packing_slips');
				$table->text('working_days_on_a_week');
				$table->integer('dispatch_cut-off_time');
				$table->text('allow_sales_of_zero_cost_items');
				$table->text('controlled_items_must_exist_for_crediting');
				$table->text('do_shipping_calculation');
				$table->integer('apply_shipping_charges_if_an_order_is_less_than');
				$table->text('create_debtor_codes_automatically');
				$table->text('create_supplier_codes_automatically');
				$table->text('tax_authority_reference_name');
				$table->integer('standard_cost_decimal_places');
				$table->integer('number_of_periods_of_stockusage');
				$table->text('show_order_values_on_grn');
				$table->text('check_quantity_charged_vs_deliver_qty');
				$table->text('check_price_charged_vs_order_price');
				$table->integer('allowed_over_charge_proportion');
				$table->integer('allowed_over_receive_proportion');
				$table->text('purchase_order_allows_same_item_multiple_times');
				$table->text('automatically_authorise_purchase_orders_if_user_has_authority');
				$table->text('financial_year_ends_on');
				$table->integer('report_page_length');
				$table->integer('default_maximum_number_of_records_to_show');
				$table->text('show_stockid_on_image');
				$table->integer('maximum_size_in_kb_of_uploaded_images');
				$table->integer('number_of_month_must_be_shown');
				$table->text('the_directory_where_images_are_stored');
				$table->text('the_directory_where_reports_are_stored');
				$table->text('only_allow_secure_socket_connections');
				$table->text('perform_database_maintenance_at_logon');
				$table->text('wiki_application');
				$table->text('wiki_path');
				$table->text('geocode_customers_and_suppliers');
				$table->text('extended_customer_information');
				$table->text('extended_supplier_information');
				$table->text('prohibit_gl_journals_to_control_accounts');
				$table->text('inventory_costing_method');
				$table->text('auto_issue_components');
				$table->text('prohibit_negative_stock');
				$table->integer('months_of_audit_trail_to_retain');
				$table->text('log_severity_level');
				$table->text('path_to_log_files');
				$table->text('controlled_items_defined_at_work_order_entry');
				$table->text('auto_create_work_orders');
				$table->string('factory_manager_email_address');
				$table->string('purchasing_manager_email_address');
				$table->string('inventory_manager_email_address');
				$table->text('using_smtp_mail');
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
