<?php

class NewpurchaseorderController extends BaseController
{
	public function getpurchaseorder()
	{
		return View::make('purchase.placeorder');
	}
}
