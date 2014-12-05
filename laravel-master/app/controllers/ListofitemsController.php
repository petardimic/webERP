<?php
/**
  Yash Patel
  **/
class ListofitemsController extends BaseController
{
	public function getlistofitems()
	{
		$items = DB::table('inventory_items')->get();
		$stocks = DB::table('stocks')->get();
		return View::make('list.items')->with('items',$items)->with('stocks',$stocks);
	}
}
