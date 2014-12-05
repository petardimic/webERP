<?php
/*
   YASH PATEL
 */
class InventoryController extends BaseController
{
	public function getadditem()
	{
		$cat = DB::table('sales_category_maintenance')->get();
		$cat_selector = array();
		foreach ($cat as $ca)
		{
			$cat_selector[$ca->sub_category] = $ca->sub_category;
		}
		return View::make('inventory.add_item')->with('name', $cat_selector);
	}
	public function postitemadded()
	{
		$validator = Validator::make(
				Input::all(),
				array(
					'item_code' => 'required'
					/*'part_descriptions' => 'required',
					'bahasa_indonesia_description' => 'required',
					'part_description' => 'required',
					'economic_order_quantity' => 'required',
					'packaged_volume' => 'required',
					'packaged_gross_weight' => 'required',
					'net_weight' => 'required',
					'units_of_measure' => 'required',
					'assembly_kit' => 'required',
					'current_or_obsolete' => 'required',
					'batch_serial_or_lot_control' => 'required',
					'serialised' => 'required',
					'perishable' => 'required',
					'decimal_places_for_display_quantity' => 'required|between:0,4',
					'bar_code' => 'required',
					'discount_category' => 'required',
					'pan_size' => 'required',
					'shrinkage_factor' => 'required'*/
					)
				);
		if ( $validator->fails())
		{
			return Redirect::to('add_item')->withInput()->withErrors($validator);
		}
		else
		{

			$item_code = Input::get('item_code');

			$part_descriptions = Input::get('part_descriptions');

			$bahasa_indonesia_description = Input::get('bahasa_indonesia_description');

			$part_description = Input::get('part_description');

			$image_file = Input::get('image_file');

			$category = Input::get('category');

			$economic_order_quantity = Input::get('economic_order_quantity');

			$packaged_volume = Input::get('packaged_volume');

			$packaged_gross_weight = Input::get('packaged_gross_weight');

			$net_weight = Input::get('net_weight');

			$units_of_measure = Input::get('units_of_measure');

			$assembly_kit = Input::get('assembly_kit');

			$current_or_obsolete = Input::get('current_or_obsolete');

			$batch_serial_or_lot_control = Input::get('batch_serial_or_lot_control');

			$serialised = Input::get('serialised');

			$perishable = Input::get('perishable');

			$decimal_places_for_display_quantity = Input::get('decimal_places_for_display_quantity');

			$bar_code = Input::get('bar_code');

			$discount_category = Input::get('discount_category');

			$pan_size = Input::get('pan_size');

			$shrinkage_factor = Input::get('shrinkage_factor');

			$item = new Inventory;
			$item->item_code = $item_code;

			$item->part_descriptions = $part_descriptions;

			$item->bahasa_indonesia_description = $bahasa_indonesia_description;

			$item->part_description = $part_description;

			$item->image_file = $image_file;

			$item->category = $category;

			$item->economic_order_quantity = $economic_order_quantity;

			$item->packaged_volume = $packaged_volume;

			$item->packaged_gross_weight = $packaged_gross_weight;

			$item->net_weight = $net_weight;

			$item->units_of_measure  = $units_of_measure;

			$item->assembly_kit = $assembly_kit;

			$item->current_or_obsolete = $current_or_obsolete;

			$item->batch_serial_or_lot_control = $batch_serial_or_lot_control;

			$item->serialised = $serialised;

			$item->perishable = $perishable;

			$item->decimal_places_for_display_quantity = $decimal_places_for_display_quantity;

			$item->bar_code = $bar_code;

			$item->discount_category = $discount_category;

			$item->pan_size = $pan_size;

			$item->shrinkage_factor = $shrinkage_factor;

			if($item->save())
			{
				return View::make('inventory.saved');
			}
			else
			{
				return View::make('home');
			}
		}
	}
}
