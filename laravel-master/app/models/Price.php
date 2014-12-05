<?php

class Price extends Eloquent
{
	public $timestamps = false;
	protected $fillable = array(
			'id',
			'item_name',
			'select_supplier',
			'price'
			);
	public $table = 'prices';
}
