<?php
/**
	Yash Patel
  **/

class SystemController extends BaseController
{
	public function getlocations()
	{
		return View::make('system.locations');
	}
	public function postlocations_saved()
	{
		$validator = Validator::make(
				Input::all(),
				array(
					'location_code' => 'required',
					'location_name' => 'required',
					'contact_for_deliveries' => 'required',
					'delivery_address_1' => 'required',
					'delivery_address_2' => 'required',
					'delivery_address_3' => 'required',
					'delivery_address_4' => 'required',
					'delivery_address_5' => 'required',
					'telephone' => 'required',
					'facsimile' => 'required',
					'email' => 'required',
					'tax' => 'required',
					'default_counter_sales_customer_code' => 'required',
					'counter_sales_branch_code' => 'required',
					'allow_internal_requests' => 'required'
					)
				);
		if($validator->fails())
		{
			return View::make('system.locations')->withInput()->withErrors($validator);
		}
		else
		{
		
			$location = new Location;
			
			$location->location_code = Input::get('location_code');

			$location->location_name = Input::get('location_name');

			$location->contact_for_deliveries = Input::get('contact_for_deliveries');

			$location->delivery_address_1 = Input::get('delivery_address_1');

			$location->delivery_address_2 = Input::get('delivery_address_2');

			$location->delivery_address_3 = Input::get('delivery_address_3');

			$location->delivery_address_4 = Input::get('delivery_address_4');

			$location->delivery_address_5 = Input::get('delivery_address_5');

			$location->country = Input::get('searchTextField');

			$location->telephone = Input::get('telephone');

			$location->facsimile = Input::get('facsimile');

			$location->email = Input::get('email');

			$location->tax = Input::get('tax');

			$location->default_counter_sales_customer_code = Input::get('default_counter_sales_customer_code');

			$location->counter_sales_branch_code = Input::get('counter_sales_branch_code');

			$location->allow_internal_requests = Input::get('allow_internal_requests');

			if($location->save())
			{
				return View::make('system.locations');
			}
		}
	}
	public function getparameters()
	{
		return View::make('system.parameters');
	}
	public function postparameters()
	{
		//validations cheers :D
		$validator = Validator::make(
				Input::all(),
				array(
					'default_date_format' => 'required',
					'first_overdue_deadline' => 'required|between:0,1000',
					'second_overdue_deadline' => 'required|between:0,1000',
					'default_credit_limit' => 'required',
					'check_credit_limits' => 'required',
					'show_settles_last_month' => 'required',
					'romalpa_clause' => 'required|max:100',
					'quick_entries' => 'required|between:1,99',
					'frequently_ordered_items' => 'required|between:1,99',
					'sales_order_allows_same_item_multiple_times' => 'required',
					'order_entry_allows_line_item_description' => 'required',
					'a_picking_note_must_be_produced_before_an_order_can_be_delivered' => 'required',
					'auto_update_exchange_rates_daily' => 'required',
					'source_exchange_rates_from' => 'required',
					'format_of_packing_slips' => 'required',
					'invoice_orientation' => 'required',
					'show_company_details_on_packing_slips' => 'required',
					'working_days_on_a_week' => 'required',
					'dispatch_cut-off_time' => 'required',
					'allow_sales_of_zero_cost_items' => 'required',
					'controlled_items_must_exist_for_crediting' => 'required',
					'do_shipping_calculation' => 'required',
					'apply_shipping_charges_if_an_order_is_less_than' => 'required',
					'create_debtor_codes_automatically' => 'required',
					'create_supplier_codes_automatically' => 'required',
					'tax_authority_reference_name' => 'required|max:100',
					'standard_cost_decimal_places' => 'required',
					'number_of_periods_of_stockusage' => 'required',
					'show_order_values_on_grn' => 'required',
					'check_quantity_charged_vs_deliver_qty' => 'required',
					'check_price_charged_vs_order_price' => 'required',
					'allowed_over_charge_proportion' => 'required',
					'allowed_over_receive_proportion' => 'required',
					'purchase_order_allows_same_item_multiple_times' => 'required',
					'automatically_authorise_purchase_orders_if_user_has_authority' => 'required',
					'financial_year_ends_on' => 'required',
					'report_page_length' => 'required',
					'default_maximum_number_of_records_to_show' => 'required',
					'show_stockid_on_image' => 'required',
					'maximum_size_in_kb_of_uploaded_images' => 'required',
					'number_of_month_must_be_shown' => 'required',
					'the_directory_where_images_are_stored' => 'required',
					'the_directory_where_reports_are_stored' => 'required',
					'only_allow_secure_socket_connections' => 'required',
					'perform_database_maintenance_at_logon' => 'required',
					'wiki_application' => 'required',
					'wiki_path' => 'required',
					'geocode_customers_and_suppliers' => 'required',
					'extended_customer_information' => 'required',
					'extended_supplier_information' => 'required',
					'prohibit_gl_journals_to_control_accounts' => 'required',
					'inventory_costing_method' => 'required',
					'auto_issue_components' => 'required',
					'prohibit_negative_stock' => 'required',
					'months_of_audit_trail_to_retain' => 'required|between:0,1000',
					'log_severity_level' => 'required',
					'path_to_log_files' => 'required|max:100',
					'controlled_items_defined_at_work_order_entry' => 'required',
					'auto_create_work_orders' => 'required',
					'using_smtp_mail' => 'required'
					)
				);
		if ($validator->fails())
		{
			return Redirect::to('system')->withInput()->withErrors($validator);
		}
		else
		{
			$default_date_format = Input::get('default_date_format');
			$first_overdue_deadline = Input::get('first_overdue_deadline');
			$second_overdue_deadline = Input::get('second_overdue_deadline');
			$default_credit_limit = Input::get('default_credit_limit');
			$check_credit_limits = Input::get('check_credit_limits');
			$show_settles_last_month = Input::get('show_settles_last_month');
			$romalpa_clause = Input::get('romalpa_clause');
			$quick_entries = Input::get('quick_entries');
			$frequently_ordered_items = Input::get('frequently_ordered_items');
			$sales_order_allows_same_item_multiple_times = Input::get('sales_order_allows_same_item_multiple_times');
			$order_entry_allows_line_item_description = Input::get('order_entry_allows_line_item_description');
			$a_picking_note_must_be_produced_before_an_order_can_be_delivered = Input::get('a_picking_note_must_be_produced_before_an_order_can_be_delivered');
			$auto_update_exchange_rates_daily = Input::get('auto_update_exchange_rates_daily');
			$source_exchange_rates_from = Input::get('source_exchange_rates_from');
			$format_of_packing_slips = Input::get('format_of_packing_slips');
			$invoice_orientation = Input::get('invoice_orientation');
			$show_company_details_on_packing_slips = Input::get('show_company_details_on_packing_slips');
			$working_days_on_a_week = Input::get('working_days_on_a_week');
			/*keep in mind :D :D*/
			$dispatch_cut_off_time = Input::get('dispatch_cut-off_time');
			$allow_sales_of_zero_cost_items = Input::get('allow_sales_of_zero_cost_items');
			$controlled_items_must_exist_for_crediting = Input::get('controlled_items_must_exist_for_crediting');
			$do_shipping_calculation = Input::get('do_shipping_calculation');
			$apply_shipping_charges_if_an_order_is_less_than = Input::get('apply_shipping_charges_if_an_order_is_less_than');
			$create_debtor_codes_automatically = Input::get('create_debtor_codes_automatically');
			$create_supplier_codes_automatically = Input::get('create_supplier_codes_automatically');
			$tax_authority_reference_name = Input::get('tax_authority_reference_name');
			$standard_cost_decimal_places = Input::get('standard_cost_decimal_places');
			$number_of_periods_of_stockusage = Input::get('number_of_periods_of_stockusage');
			$show_order_values_on_grn = Input::get('show_order_values_on_grn');
			$check_quantity_charged_vs_deliver_qty = Input::get('check_quantity_charged_vs_deliver_qty');
			$check_price_charged_vs_order_price = Input::get('check_price_charged_vs_order_price');
			$allowed_over_charge_proportion = Input::get('allowed_over_charge_proportion');
			$allowed_over_receive_proportion = Input::get('allowed_over_receive_proportion');
			$purchase_order_allows_same_item_multiple_times = Input::get('purchase_order_allows_same_item_multiple_times');
			$automatically_authorise_purchase_orders_if_user_has_authority = Input::get('automatically_authorise_purchase_orders_if_user_has_authority');
			$financial_year_ends_on = Input::get('financial_year_ends_on');
			$report_page_length = Input::get('report_page_length');
			$default_maximum_number_of_records_to_show = Input::get('default_maximum_number_of_records_to_show');
			$show_stockid_on_image = Input::get('show_stockid_on_image');
			$maximum_size_in_kb_of_uploaded_images = Input::get('maximum_size_in_kb_of_uploaded_images');
			$number_of_month_must_be_shown = Input::get('number_of_month_must_be_shown');
			$the_directory_where_images_are_stored = Input::get('the_directory_where_images_are_stored');
			$the_directory_where_reports_are_stored = Input::get('the_directory_where_reports_are_stored');
			$only_allow_secure_socket_connections = Input::get('only_allow_secure_socket_connections');
			$perform_database_maintenance_at_logon = Input::get('perform_database_maintenance_at_logon');
			$wiki_application = Input::get('wiki_application');
			$wiki_path = Input::get('wiki_path');
			$geocode_customers_and_suppliers = Input::get('geocode_customers_and_suppliers');
			$extended_customer_information = Input::get('extended_customer_information');
			$extended_supplier_information = Input::get('extended_supplier_information');
			$prohibit_gl_journals_to_control_accounts = Input::get('prohibit_gl_journals_to_control_accounts');
			$inventory_costing_method = Input::get('inventory_costing_method');
			$auto_issue_components = Input::get('auto_issue_components');
			$prohibit_negative_stock = Input::get('prohibit_negative_stock');
			$months_of_audit_trail_to_retain = Input::get('months_of_audit_trail_to_retain');
			$log_severity_level = Input::get('log_severity_level');
			$path_to_log_files = Input::get('path_to_log_files');
			$controlled_items_defined_at_work_order_entry = Input::get('controlled_items_defined_at_work_order_entry');
			$auto_create_work_orders = Input::get('auto_create_work_orders');
			$factory_manager_email_address = Input::get('factory_manager_email_address');
			$purchasing_manager_email_address = Input::get('purchasing_manager_email_address');
			$inventory_manager_email_address = Input::get('inventory_manager_email_address');
			$using_smtp_mail = Input::get('using_smtp_mail');
			$parameters = new Parameter;
			$parameters->default_date_format = $default_date_format;
			$parameters->first_overdue_deadline = $first_overdue_deadline;
			$parameters->second_overdue_deadline = $second_overdue_deadline;

			$parameters->default_credit_limit = $default_credit_limit;

			$parameters->check_credit_limits = $check_credit_limits;

			$parameters->show_settles_last_month = $show_settles_last_month;

			$parameters->romalpa_clause = $romalpa_clause;

			$parameters->quick_entries = $quick_entries;

			$parameters->frequently_ordered_items = $frequently_ordered_items;
	
			$parameters->sales_order_allows_same_item_multiple_times = $sales_order_allows_same_item_multiple_times;
			$parameters->order_entry_allows_line_item_description = $order_entry_allows_line_item_description;
			$parameters->a_picking_note_must_be_produced_before_an_order_can_be_delivered = $a_picking_note_must_be_produced_before_an_order_can_be_delivered;

			$parameters->auto_update_exchange_rates_daily = $auto_update_exchange_rates_daily;

			$parameters->source_exchange_rates_from = $source_exchange_rates_from;

			$parameters->format_of_packing_slips = $format_of_packing_slips;

			$parameters->invoice_orientation = $invoice_orientation;

			$parameters->show_company_details_on_packing_slips = $show_company_details_on_packing_slips;

			$parameters->working_days_on_a_week = $working_days_on_a_week;

			$parameters->dispatch_cut_off_time = $dispatch_cut_off_time;

			$parameters->allow_sales_of_zero_cost_items = $allow_sales_of_zero_cost_items;

			$parameters->controlled_items_must_exist_for_crediting = $controlled_items_must_exist_for_crediting;

			$parameters->do_shipping_calculation = $do_shipping_calculation;

			$parameters->apply_shipping_charges_if_an_order_is_less_than = $apply_shipping_charges_if_an_order_is_less_than;

			$parameters->create_debtor_codes_automatically = $create_debtor_codes_automatically;

			$parameters->create_supplier_codes_automatically = $create_supplier_codes_automatically;

			$parameters->tax_authority_reference_name = $tax_authority_reference_name;

			$parameters->standard_cost_decimal_places = $standard_cost_decimal_places;

			$parameters->number_of_periods_of_stockusage = $number_of_periods_of_stockusage;

			$parameters->show_order_values_on_grn = $show_order_values_on_grn;

			$parameters->check_quantity_charged_vs_deliver_qty = $check_quantity_charged_vs_deliver_qty;

			$parameters->check_price_charged_vs_order_price = $check_price_charged_vs_order_price;

			$parameters->allowed_over_charge_proportion = $allowed_over_charge_proportion;

			$parameters->allowed_over_receive_proportion = $allowed_over_receive_proportion;

			$parameters->purchase_order_allows_same_item_multiple_times = $purchase_order_allows_same_item_multiple_times;

			$parameters->automatically_authorise_purchase_orders_if_user_has_authority = $automatically_authorise_purchase_orders_if_user_has_authority;

			$parameters->financial_year_ends_on = $financial_year_ends_on;

			$parameters->report_page_length = $report_page_length;

			$parameters->default_maximum_number_of_records_to_show = $default_maximum_number_of_records_to_show;

			$parameters->show_stockid_on_image = $show_stockid_on_image;

			$parameters->maximum_size_in_kb_of_uploaded_images = $maximum_size_in_kb_of_uploaded_images;

			$parameters->number_of_month_must_be_shown = $number_of_month_must_be_shown;

			$parameters->the_directory_where_images_are_stored = $the_directory_where_images_are_stored;

			$parameters->the_directory_where_reports_are_stored = $the_directory_where_reports_are_stored;

			$parameters->only_allow_secure_socket_connections = $only_allow_secure_socket_connections;

			$parameters->perform_database_maintenance_at_logon =$perform_database_maintenance_at_logon;

			$parameters->wiki_application = $wiki_application;

			$parameters->wiki_path = $wiki_path;

			$parameters->geocode_customers_and_suppliers = $geocode_customers_and_suppliers;

			$parameters->extended_customer_information = $extended_customer_information;

			$parameters->extended_supplier_information = $extended_supplier_information;

			$parameters->prohibit_gl_journals_to_control_accounts;

			$parameters->inventory_costing_method = $inventory_costing_method;

			$parameters->auto_issue_components = $auto_issue_components;

			$parameters->prohibit_negative_stock = $prohibit_negative_stock;

			$parameters->months_of_audit_trail_to_retain = $months_of_audit_trail_to_retain;

			$parameters->log_severity_level = $log_severity_level;

			$parameters->path_to_log_files = $path_to_log_files;

			$parameters->controlled_items_defined_at_work_order_entry = $controlled_items_defined_at_work_order_entry;

			$parameters->auto_create_work_orders = $auto_create_work_orders;

			$parameters->factory_manager_email_address = $factory_manager_email_address;

			$parameters->purchasing_manager_email_address = $purchasing_manager_email_address;

			$parameters->inventory_manager_email_address = $inventory_manager_email_address;

			$parameters->using_smtp_mail = $using_smtp_mail;

			if($parameters->save())
			{
				return View::make('system.saved');
			}
			else
			{
				return View::make('home');
			}
		}
	}
	public function geteditlocations($id)
	{
		$location_code = $id;
		return View::make('system.edit')->with('location', $id);
	}
	public function getdeletelocations($id)
	{
		$location = Location::find($id);
		$location->delete();
		return Redirect::to('system.locations');
	}
}

