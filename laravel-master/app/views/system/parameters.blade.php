@extends('include/master')
@section('content')
@include("errors.global_alert_messages")

<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>System</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Parameters
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                
                                    {{Form::open(array('url'=>'saved'))}}
        
                                        <div class="form-group">
				<label >Default Date Format</label>
				
				{{Form::select('default_date_format',array('d/m/Y'=>'d/m/Y',
							'd.m.Y'=>'d.m.Y',
							'm/d/Y'=>'m/d/Y',
							'Y/m/d'=>'Y/m/d',
							'Y-m-d'=>'Y-m-d'),'',array('class'=>'form-control'))}}
				{{ $errors->first('default_date_format') }}
				
			</div>
			<div class="form-group">
				<label >First Overdue Deadline in (days):</label>
				
				{{Form::input('number','first_overdue_deadline','',array('class'=>'form-control'))}}
				{{ $errors->first('first_overdue_deadline') }}
				
			</div>
			<div class="form-group">
				<label >Second Overdue Deadline in (days):</label>
				
				{{Form::input('number','second_overdue_deadline','',array('class'=>'form-control'))}}
				{{ $errors->first('second_overdue_deadline') }}
				
			</div>
			<div class="form-group">
				<label >Default Credit Limit:</label>
				
				{{Form::input('number','default_credit_limit','',array('class'=>'form-control'))}}
				{{ $errors->first('default_credit_limit') }}
				
			</div>
			<div class="form-group">
				<label >Check Credit Limits:</label>
				
				{{Form::select('check_credit_limits',array('Warn on breach'=>'Warn on breach',
							'Do not check'=>'Do not check',
							'Prohibit sales'=>'Prohibit sales'
							),'',array('class'=>'form-control'))}}
				{{ $errors->first('check_credit_limits') }}
				
			</div>
			<div class="form-group">
				<label >Show Settled Last Month:</label>
				
				{{Form::select('show_settles_last_month',array('YES'=>'YES',
							'NO'=>'NO'
							),'',array('class'=>'form-control'))}}
				{{ $errors->first('show_settles_last_month') }}
				
			</div>
			<div class="form-group">
				<label >Romalpa Clause:</label>
				
				{{Form::text('romalpa_clause','',array('class'=>'form-control'))}}
				{{ $errors->first('romalpa_clause') }}
				
			</div>
			<div class="form-group">
				<label >Quick Entries:</label>
				
				{{Form::input('number','quick_entries','',array('class'=>'form-control'))}}
				{{ $errors->first('quick_entries') }}
				
			</div>
			<div class="form-group">
				<label >Frequently Ordered Items:</label>
				
				{{Form::input('number','frequently_ordered_items','',array('class'=>'form-control'))}}
				{{ $errors->first('frequently_ordered_items') }}
				
			</div>
			<div class="form-group">
				<label >Sales Order Allows Same Item Multiple Times:</label>
				
				{{Form::select('sales_order_allows_same_item_multiple_times',array('YES'=>'YES',
							'NO'=>'NO',
							),'',array('class'=>'form-control'))}}
				{{ $errors->first('sales_order_allows_same_item_multiple_times') }}
				
			</div>
			<div class="form-group">
				<label >Order Entry allows Line Item Description:</label>
				
				{{Form::select('order_entry_allows_line_item_description',array('Allow line Description entry'=>'Allow line Description entry',
							'No Description line'=>'No Description line',
							),'',array('class'=>'form-control'))}}
				{{ $errors->first('order_entry_allows_line_item_description') }}
				
			</div>
			<div class="form-group">
				<label >A picking note must be produced before an order can be delivered:</label>
				
				{{Form::select('a_picking_note_must_be_produced_before_an_order_can_be_delivered',array('YES'=>'YES',
							'NO'=>'NO'
							),'',array('class'=>'form-control'))}}
				{{ $errors->first('a_picking_note_must_be_produced_before_an_order_can_be_delivered') }}
				
			</div>
			<div class="form-group">
				<label >Auto Update Exchange Rates Daily:</label>
				
				{{Form::select('auto_update_exchange_rates_daily',array('Automatic'=>'Automatic',
							'Manually'=>'Manually'
							),'',array('class'=>'form-control'))}}
				{{ $errors->first('auto_update_exchange_rates_daily') }}
				
			</div>
			<div class="form-group">
				<label >Source Exchange Rates From:</label>
				
				{{Form::select('source_exchange_rates_from',array('European central bank'=>'European central bank',
							'Google'=>'Google'
							),'',array('class'=>'form-control'))}}
				{{ $errors->first('source_exchange_rates_from') }}
				
			</div>
			<div class="form-group">
				<label >Format of Packing Slips:</label>
				
				{{Form::select('format_of_packing_slips',array('Laser Printed'=>'Laser Printed',
							'Special Stationary'=>'Special Stationary'
							),'',array('class'=>'form-control'))}}
				{{ $errors->first('format_of_packing_slips') }}
				
			</div>
			<div class="form-group">
				<label >Invoice Orientation:</label>
				
				{{Form::select('invoice_orientation',array('Landscape'=>'Landscape',
							'Portrait'=>'Portrait'
							),'',array('class'=>'form-control'))}}
				{{ $errors->first('invoice_orientation') }}
				
			</div>
			<div class="form-group">
				<label >Show company details on packing slips:</label>
				
				{{Form::select('show_company_details_on_packing_slips',array('Show Company Details'=>'Show Company Details',
							'Hide Company Details'=>'Hide Company Details'
							),'',array('class'=>'form-control'))}}
				{{ $errors->first('show_company_details_on_packing_slips') }}
				
			</div>
			<div class="form-group">
				<label >Working Days on a Week:</label>
				
				{{Form::select('working_days_on_a_week',array('7 Working Days'=>'7 Working Days',
							'6 Working Days'=>'6 Working Days',
							'5 Working Days' => '5 Working Days'
							),'',array('class'=>'form-control'))}}
				{{ $errors->first('working_days_on_a_week') }}
				
			</div>
			<div class="form-group">
				<label >Dispatch Cut-Off Time:</label>
				
				{{Form::selectRange('dispatch_cut-off_time', 0, 23,'',array('class'=>'form-control'))}}
				{{ $errors->first('dispatch_cut-off_time') }}
				
			</div>
			<div class="form-group">
				<label >Allow Sales Of Zero Cost Items:</label>
				
				{{Form::select('allow_sales_of_zero_cost_items',array('YES'=>'YES',
							'NO'=>'NO'
							),'',array('class'=>'form-control'))}}
				{{ $errors->first('allow_sales_of_zero_cost_items') }}
				
			</div>
			<!--
			<div class="form-group">
				<label class="col-sm-3 control-label">Controlled Items Must Exist For Crediting:</label>
				
				{{Form::select('controlled_items_must_exist_for_crediting',array('YES'=>'YES',
							'NO'=>'NO'
							))}}
				{{ $errors->first('controlled_items_must_exist_for_crediting') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Do Shipping Calculation:</label>
				
				{{Form::select('do_shipping_calculation',array('YES'=>'YES',
							'NO'=>'NO'
							))}}
				{{ $errors->first('do_shipping_calculation') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Apply shipping charges if an order is less than:</label>
				
				{{Form::input('number','apply_shipping_charges_if_an_order_is_less_than')}}
				{{ $errors->first('apply_shipping_charges_if_an_order_is_less_than') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Create Debtor Codes Automatically:</label>
				
				{{Form::select('create_debtor_codes_automatically',array('Automatic'=>'Automatic',
							'Manual Entry'=>'Manual Entry'
							))}}
				{{ $errors->first('create_debtor_codes_automatically') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Create Supplier Codes Automatically:</label>
				
				{{Form::select('create_supplier_codes_automatically',array('Automatic'=>'Automatic',
							'Manual Entry'=>'Manual Entry'
							))}}
				{{ $errors->first('create_supplier_codes_automatically') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Tax Authority Reference Name:</label>
				
				{{Form::text('tax_authority_reference_name')}}
				{{ $errors->first('tax_authority_reference_name') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Standard Cost Decimal Places:</label>
				
				{{Form::selectRange('standard_cost_decimal_places', 0, 4)}}
				{{ $errors->first('standard_cost_decimal_places') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Number Of Periods Of StockUsage:</label>
				
				{{Form::selectRange('number_of_periods_of_stockusage', 1, 12)}}
				{{ $errors->first('number_of_periods_of_stockusage') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Show order values on GRN:</label>
				
				{{Form::select('show_order_values_on_grn',array('YES'=>'YES',
							'NO'=>'NO'
							))}}
				{{ $errors->first('show_order_values_on_grn') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Check Quantity Charged vs Deliver Qty:</label>
				
				{{Form::select('check_quantity_charged_vs_deliver_qty',array('YES'=>'YES',
							'NO'=>'NO'
							))}}
				{{ $errors->first('check_quantity_charged_vs_deliver_qty') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Check Price Charged vs Order Price:</label>
				
				{{Form::select('check_price_charged_vs_order_price',array('YES'=>'YES',
							'NO'=>'NO'
							))}}
				{{ $errors->first('check_price_charged_vs_order_price') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Allowed Over Charge Proportion:</label>
				
				{{Form::input('number','allowed_over_charge_proportion')}}
				{{ $errors->first('allowed_over_charge_proportion') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Allowed Over Receive Proportion:</label>
				
				{{Form::input('number','allowed_over_receive_proportion')}}
				{{ $errors->first('allowed_over_receive_proportion') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Purchase Order Allows Same Item Multiple Times:</label>
				
				{{Form::select('purchase_order_allows_same_item_multiple_times',array('YES'=>'YES',
							'NO'=>'NO'
							))}}
				{{ $errors->first('purchase_order_allows_same_item_multiple_times') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Automatically authorise purchase orders if user has authority:</label>
				
				{{Form::select('automatically_authorise_purchase_orders_if_user_has_authority',array('YES'=>'YES',
							'NO'=>'NO'
							))}}
				{{ $errors->first('automatically_authorise_purchase_orders_if_user_has_authority') }}
				
			</div>
			<header class="panel-heading">
				GENERAL SETTINGS
			</header>
			<div class="form-group">
				<label class="col-sm-3 control-label">Financial Year Ends On:</label>
				
				{{Form::select('financial_year_ends_on',array('January'=>'January',
							'February'=>'February',
							'March' => 'March',
							'April' => 'April',
							'May' => 'May',
							'June' => 'June',
							'July' => 'July',
							'August' => 'August',
							'September' => 'September',
							'October' => 'October',
							'November' => 'November',
							'December' => 'Decamber'
							))}}
				{{ $errors->first('financial_year_ends_on') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Report Page Length:</label>
				
				{{Form::input('number','report_page_length')}}
				{{ $errors->first('report_page_length') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Default Maximum Number of Records to Show:</label>
				
				{{Form::input('number','default_maximum_number_of_records_to_show')}}
				{{ $errors->first('default_maximum_number_of_records_to_show') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Show Stockid on images:</label>
				
				{{Form::select('show_stockid_on_image',array('YES'=>'YES',
							'NO'=>'NO'
							))}}
				{{ $errors->first('show_stockid_on_image') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Maximum Size in KB of uploaded images:</label>
				
				{{Form::input('number','maximum_size_in_kb_of_uploaded_images')}}
				{{ $errors->first('maximum_size_in_kb_of_uploaded_images') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Number Of Month Must Be Shown:</label>
				
				{{Form::input('number','number_of_month_must_be_shown')}}
				{{ $errors->first('number_of_month_must_be_shown') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">The directory where images are stored:</label>
				
				{{Form::select('the_directory_where_images_are_stored',array('part_pics'=>'part_pics',
							'reportwriter'=>'reportwriter',
							'EDI_incoming_orders' => 'EDI_incoming_orders',
							'FormDesigns' => 'FormDesigns',
							'EDI_sent' => 'EDI_sent',
							))}}
				{{ $errors->first('the_directory_where_images_are_stored') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">The directory where reports are stored:</label>
				
				{{Form::select('the_directory_where_reports_are_stored',array('reports'=>'reports',
							'reportwriter'=>'reportwriter',
							'EDI_incoming_orders' => 'EDI_incoming_orders',
							'FormDesigns' => 'FormDesigns',
							'EDI_sent' => 'EDI_sent',
							))}}
				{{ $errors->first('the_directory_where_reports_are_stored') }}
				
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">Only allow secure socket connections:</label>
				
				{{Form::select('only_allow_secure_socket_connections',array('YES'=>'YES',
							'NO'=>'NO'
							))}}
				{{ $errors->first('only_allow_secure_socket_connections') }}
				
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">Perform Database Maintenance At Logon:</label>
				
				{{Form::select('perform_database_maintenance_at_logon',array('Daily'=>'Daily',
							'Weekly'=>'Weekly',
							'Monthly' => 'Monthly',
							'Never' => 'Never',
							'Allow SysAdmin Access Only' => 'Allow SysAdmin Access Only',
							))}}
				{{ $errors->first('perform_database_maintenance_at_logon') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Wiki application:</label>
				
				{{Form::select('wiki_application',array('Disabled'=>'Disabled',
							'WackoWiki'=>'WackoWiki',
							'MediaWiki' => 'MediaWiki',
							'DokuWiki' => 'Dokuwiki',
							))}}
				{{ $errors->first('wiki_application') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Wiki Path:</label>
				
				{{Form::text('wiki_path')}}
				{{ $errors->first('wiki_path') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Geocode Customers and Suppliers:</label>
				
				{{Form::select('geocode_customers_and_suppliers',array('Geocode Integration Enabled'=>'Geocode Intregation Enabled',
							'Geocode Integration Disabled'=>'Geocode Integration Disabled'
							))}}
				{{ $errors->first('geocode_customers_and_suppliers') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Extended Customer Information:</label>
				
				{{Form::select('extended_customer_information',array('Extended Customer Info Enabled'=>'Extended Customer Info Enabled',
							'Extended Customer Info Disabled'=>'Extended Customer Info Disabled'
							))}}
				{{ $errors->first('extended_customer_information') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Extended Supplier Information:</label>
				
				{{Form::select('extended_supplier_information',array('Extended Supplier Info Enabled'=>'Extended Supplier Info Enabled',
							'Extended Supplier Info Disabled'=>'Extended Supplier Info Disabled'
							))}}
				{{ $errors->first('extended_supplier_information') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Prohibit GL Journals to Control Accounts:</label>
				
				{{Form::select('prohibit_gl_journals_to_control_accounts',array('Allowed'=>'Allowed',
							'Prohibited'=>'Prohibited'
							))}}
				{{ $errors->first('prohibit_gl_journals_to_control_accounts') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Inventory Costing Method:</label>
				
				{{Form::select('inventory_costing_method',array('Standard Costing'=>'Standard Costing',
							'Weighted Average Costing'=>'Weighted Average Costing'
							))}}
				{{ $errors->first('inventory_costing_method') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Auto Issue Components:</label>
				
				{{Form::select('auto_issue_components',array('YES'=>'YES',
							'NO'=>'NO'
							))}}
				{{ $errors->first('auto_issue_components') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Prohibit Negative Stock: 	</label>
				
				{{Form::select('prohibit_negative_stock',array('YES'=>'YES',
							'NO'=>'NO'
							))}}
				{{ $errors->first('prohibit_negative_stock') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Months of Audit Trail to Retain:</label>
				
				{{Form::input('number','months_of_audit_trail_to_retain')}}
				{{ $errors->first('months_of_audit_trail_to_retain') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Log Severity Level:</label>
				
				{{Form::select('log_severity_level',array('None'=>'None',
							'All'=>'All',
							'Errors Only'=>'Errors Only',
							'Errors And Warnings' => 'Errors And Warnings',
							'Errors, Warnings And Info' => 'Errors, Warnings And Info'
							))}}
				{{ $errors->first('log_severity_level') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Path to log files:</label>
				
				{{Form::text('path_to_log_files')}}
				{{ $errors->first('path_to_log_files') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Controlled Items Defined At Work Order Entry:</label>
				
				{{Form::select('controlled_items_defined_at_work_order_entry',array('YES'=>'YES',
							'NO'=>'NO'
							))}}
				{{ $errors->first('controlled_items_defined_at_work_order_entry') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Auto Create Work Orders:</label>
				
				{{Form::select('auto_create_work_orders',array('YES'=>'YES',
							'NO'=>'NO'
							))}}
				{{ $errors->first('auto_create_work_orders') }}
				
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Factory Manager Email Address:</label>
				
				{{Form::email('factory_manager_email_address')}}
				{{ $errors->first('factory_manager_email_address') }}
							
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Purchasing Manager Email Address:</label>
				
				{{Form::email('purchasing_manager_email_address')}}
				{{ $errors->first('purchasing_manager_email_address') }}
							
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Inventory Manager Email Address:</label>
				
				{{Form::email('inventory_manager_email_address')}}
				{{ $errors->first('inventory_manager_email_address') }}
							
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Using Smtp Mail</label>
				
				{{Form::select('using_smtp_mail',array('YES'=>'YES',
							'NO'=>'NO'
							))}}
				{{ $errors->first('using_smtp_mail') }}
				
          -->                              
                                        <div class="form-group">
                                        
                                        {{link_to('system','Cancel',array("class"=>"btn btn-danger"))}}
                                        {{Form::submit('Update',array("class"=>"btn btn-success"))}}
                                        </div>
                                        </div>
                                        {{Form::close()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>


    </div>

@stop
