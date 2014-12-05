<?php

/**
  Sachin
  **/
class ListoforderController extends BaseController
{
	public function getlistoforder()
	{
		$orders = DB::table('purchase_order_items')->get();
		$purchase = DB::table('purchase_orders')->get();
		return View::make('list.order')->with('orders',$orders)->with('purchase',$purchase);
		
	}
}
