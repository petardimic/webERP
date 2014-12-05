<?php
/**
 Yash Patel
**/

class PriceController extends BaseController
{
	public function getprice()
	{
		$items = DB::table('inventory_items')->get();
		$item_selector = array();
		foreach( $items as $item)
		{
			$item_selector[$item->item_code] = $item->item_code;
		}
		$suppliers = DB::table('suppliers')->get();
		$supplier_selector = array();
		foreach( $suppliers as $supplier)
		{
			$supplier_selector[$supplier->supplier_name] = $supplier->supplier_name;
		}
		return View::make('price.price')->with('items',$item_selector)->with('suppliers', $supplier_selector);
	}
	public function postprice()
	{
		$items = DB::table('inventory_items')->get();
		$item_selector = array();
		foreach( $items as $item)
		{
			$item_selector[$item->item_code] = $item->item_code;
		}
		foreach($items as $item)
		{
			$use = (string)$item->item_code;
			$input_select_supplier = "select_supplier$use";
			$select_supplier = Input::get($input_select_supplier);
			$input_price = "price$use";
			$p = Input::get($input_price);
			$price = new Price;
			$price->item_name = $use;
			$price->select_supplier = (string)$select_supplier;
			$price->price = (string)$p;
			$price->save();
		}
		return View::make('home');
	}
}
