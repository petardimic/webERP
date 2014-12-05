<?php

class Category extends Eloquent
{
	public  $timestamps = false;
	protected $fillable = array(
			'sub_category',
			'active',
			'select',
			'edit',
			'delete',
			'image'
			);
	public $table = 'sales_category_maintenance';
}
