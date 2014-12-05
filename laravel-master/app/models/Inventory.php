<?php

class Inventory extends Eloquent
{
	protected $fillable = array(
			'item_code',
			'part_descriptions',
			'bahasa_indonesia_description',
			'part_description',
			'image_file',
			'category',
			'economic_order_quantity',
			'packaged_volume',
			'packaged_gross_weight',
			'net_weight',
			'units_of_measure',
			'assembly_kit',
			'current_or_obsolete',
			'batch_serial_or_lot_control',
			'serialised',
			'perishable',
			'decimal_places_for_display_quantity',
			'bar_code',
			'discount_category',
			'pan_size',
			'shrinkage_factor'
	);
	public $table = 'inventory_items';
}
