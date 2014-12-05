<?php

class Costumer extends Eloquent
{
	protected $fillable = array(
			'costumer_name',
			'costumer_address',
			'country',
			'costumer_type',
			'discount_percentage',
			'Discount_code'
			);
	public $table = 'costumers';
}
