<?php
class SalesController extends BaseController
{
	public function getsales()
	{
		$users = DB::table('users')->get();
		return View::make('sales.search_user')->with('users',$users);
	}
	public function getselect_user($id)
	{
			
			$users = DB::table('users')->get();
			$input = NULL;
			foreach($users as $user)
			{
				if($user->id == $id)
				{
					$input = $user;
					break;
				}
			}
			$orders = DB::table('purchase_order_items')->get();
			$purchase = DB::table('purchase_orders')->get();
			return View::make('sales.select')->with('name', $input)->with('orders',$orders)->with('purchase',$purchase);
	}
	public function getchangesalesstatus($id)
	{

			$purchase = Purchase::find($id);
			$purchase->delivery_status = "yes";
			$purchase->save();
			$orders = DB::table('purchase_order_items')->get();
			$stocks = DB::table('stocks')->get();
			$items = DB::table('inventory_items')->get();
			foreach($orders as $order)
			{
				if($order->purchase_order_id == $id)
				{
					foreach($stocks as $stock)
					{
						if(strcmp($stock->item_code,$order->item)==0)
						{
							$rem = $stock->Stock_left;
							$stock->stock_left = $rem - $order->quantity	;
							//$stock->save();
						}
					}
				}
			}
			return Redirect::back();
	}
	public function getmakeinvoice($id)
	{
			return View::make('sales.invoice')->with("id",$id);
	}
}

?>
