<?php

class Orderitem extends Eloquent
{
	public  $timestamps = false;
	protected $fillable = array(
			'purchase_order_id',
			'item',
			'quantity'
			
			);
	public $table = 'purchase_order_items';
}
