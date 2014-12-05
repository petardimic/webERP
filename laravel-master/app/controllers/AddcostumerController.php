<?php 

class AddcostumerController extends BaseController
{
	public function getadd_costumer()
	{
		return View::make('costumer.add');
	}
	public function postcostumer_save()
	{
		$validator = Validator::make(
				Input::all(),
				array(
					'costumer_name' => 'required',
					'costumer_address' => 'required',
					'costumer_type' => 'required'
					)
				);
		if($validator->fails())
		{
			return View::make('costumer.add')->withInput(Input::all())->withError($validator);
		}
		else
		{
			$costumers = new Costumer;
			$costumers->costumer_name = Input::get('costumer_name');
			$costumers->costumer_address = Input::get('costumer_address');
			$costumers->country = Input::get('country');
			$costumers->costumer_type = Input::get('costumer_type');
			$costumers->discount_percentage = Input::get('discount_percentage');
			$costumers->Discount_code = Input::get('Discount_code');
			if($costumers->save())
			{
				return View::make('home');
			}
		}
	}
}
