<?php

class Purchase extends Eloquent
{
	public  $timestamps = false;
	protected $fillable = array(
			'user',
			'order_date',
			'supplier',
			'location',
			'deliveery_status',
			'bill',
			//'qty'
			
			);
	public $table = 'purchase_orders';
}