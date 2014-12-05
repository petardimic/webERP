<?php
/**
	Yash Khandelwal
  **/

class StocksController extends BaseController
{
	public function getupdate_stocks()
	{
		return View::make('stock.update_stock');
	}

	public function postupdate_stocks()
	{
		    $stock_left = Input::get('stock_left');
		    $item_code = Input::get('item_code');

		    $stock = new Stock;
		    $stock->item_code = $item_code;
		    $stock->stock_left = $stock_left;

		    if($stock->save())
		    {
		    	return "saved";
		    }
		    else
		    {
		    	return "not saved";
		    }


		    }
}
