 	<?php

class Stock extends Eloquent
{
	public  $timestamps = false;
	protected $fillable = array(
			

		'stock_left',
		'item_code'

			);
	public $table = 'stocks';
}
