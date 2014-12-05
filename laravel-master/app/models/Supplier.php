<?php

class Supplier extends Eloquent
{
	public  $timestamps = false;
	protected $fillable = array(
			

		'supplier_name',
		'add_line1' ,
		'add_line2',
		'add_line3',
		'add_line4',
		'add_line5',
		'country',
		'telephone',
		'facsimile',
		'email',
		'url' ,
		'supplier_type' ,
		'supplier_since',
		'bank_particulars',
		//'bank_reference',
		'bank_acc_number',
		'payment_terms',
		'factor_company',
		'tax_reference',
		'supplier_currency' ,
		'remittance_advice' ,
		'tax_group'

			);
	public $table = 'suppliers';
}
