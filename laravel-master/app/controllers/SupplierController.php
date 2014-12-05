<?php
/**
	Yash Khandelwal && Yash Patel(fixing bugs)
  **/

class SupplierController extends BaseController
{
	public function get_supplier()
	{
		return View::make('suppliers.add_supplier');
	}


	public function post_supplier()
	{
			$validator = Validator::make(
				Input::all(),
				array(
					
		'supplier_name' => 'required',
		'add_line1' => array('required','max:40'),
		'add_line2',
		'add_line3',
		'add_line4',
		'add_line5',
		//'country' => 'required',
		'telephone' => array('required','numeric'),
		'facsimile' => 'required',
		'email' => 'required',
		//'url' => 'required',
		'supplier_type' => 'required',
		'supplier_since' => 'required',
		'bank_particulars' => 'required',
		//'bank_reference' => 'required',
		'bank_acc_number' => array('required','numeric'),
		'payment_terms' => 'required',
		'factor_company' => 'required',
		'tax_reference' => 'required',
		'supplier_currency' => 'required',
		'remittance_advice' => 'required',
		'tax_group' => 'required'
					)					
					);


		if ($validator->fails())
		{	
			return Redirect::to('add_supplier')->withInput()->withErrors($validator);
		}

		else
			{
				$supplier_name = Input::get('supplier_name');
				$add_line1 = Input::get('add_line1');
				$add_line2 = Input::get('add_line2');
				$add_line3 = Input::get('add_line3');
				$add_line4 = Input::get('add_line4');
				$add_line5 = Input::get('add_line5');
				//$country = Input::get('country');
				$telephone = Input::get('telephone');
				$facsimile = Input::get('facsimile');
				$email = Input::get('email');
				$url = Input::get('url');
				$supplier_type = Input::get('supplier_type');
				$supplier_since = Input::get('supplier_since');
				$bank_particulars = Input::get('bank_particulars');
				//See This
				$bank_reference = Input::get('bank_reference');
				$bank_acc_number = Input::get('bank_acc_number');
				$payment_terms = Input::get('payment_terms');
				$factor_company = Input::get('factor_company');
				$tax_reference = Input::get('tax_reference');
				$supplier_currency = Input::get('supplier_currency');
				$remittance_advice = Input::get('remittance_advice');
				$tax_group = Input::get('tax_group');
												
				$supplier = new Supplier;

				$supplier->supplier_name = $supplier_name;
				$supplier->add_line1 = $add_line1;
				$supplier->add_line2= $add_line2;
				$supplier->add_line3= $add_line3;
				$supplier->add_line4= $add_line4;
				$supplier->add_line5 =$add_line5;
				//$supplier->country= $country;
				$supplier->telephone= $telephone;
				$supplier->facsimile= $facsimile;
				$supplier->email= $email;
				$supplier->url= $url;
				$supplier->supplier_type =$supplier_type;
				$supplier->supplier_since =$supplier_since;
				$supplier->bank_particulars =$bank_particulars;
				$supplier->bank_reference =$bank_reference;
				$supplier->bank_acc_number = $bank_acc_number;
				$supplier->payment_terms = $payment_terms;
				$supplier->factor_company= $factor_company;
				$supplier->tax_reference = $tax_reference;
				$supplier->supplier_currency = $supplier_currency;
				$supplier->remittance_advice = $remittance_advice;
				$supplier->tax_group = $tax_group;

			

			if($supplier->save())
			{
				return Redirect::to('add_supplier')->with('msg','Supplier is Added ');
			}
			else
			{
				return View::make('home');
			}
			}
	}
}

