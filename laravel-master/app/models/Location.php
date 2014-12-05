<?php

class Location extends Eloquent
{
	public $timestamps = false;
	protected $fillable  = array (
			'location_code',
			'location_name',
			'contact_for_deliveries',
			'delivery_address_1',
			'delivery_address_2',
			'delivery_address_3',
			'delivery_address_4',
			'delivery_address_5',
			'country',
			'telephone',
			'facsimile',
			'email',
			'tax',
			'default_counter_sales_customer_code',
			'counter_sales_branch_code',
			'allow_internal_requests'

			);
	public $table = 'locations';
}
