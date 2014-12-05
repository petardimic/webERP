<?php

/**
  Sachin
  **/
class BillController extends BaseController
{
	public function checkbill()
	{
		$porder = DB::table('purchase_orders')->get();
		$price = DB::table('prices')->get();
		return View::make('bill.bill')->with('porder',$porder)->with('price',$price);
	}
}
