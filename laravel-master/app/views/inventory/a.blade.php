@extends('layouts.main')
@section('content')
@extends('includes/sidebar')

<style>
table, th, td {
   border: 1px solid black;
} 
td {
    text-align: middle;
}
td {
    padding: 15px;
}
.Table{
	overflow:scroll;
    height:500px;
}
</style>



<section class="">
	<section class = "wrapper">
	@include("errors.global_alert_messages")
	<div class = "row" >
	<div class = "col-lg-12">
	<section class="panel">
		<header class="panel-heading">
		ADD SUPPLIER
		</header>
		<div class="panel-body">
			{{Form::open(array('url'=>'supplier_saved',"class" => "form-horizontal bucket-form"))}}
			<div class="form-group">
				<label class="col-sm-3 control-label">Supplier Name</label>
				<div class="col-sm-4">
				{{Form::text("supplier_name")}}
				{{ $errors->first('supplier_name') }}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Adderess line 1(Street):</label>
				<div class="col-sm-4">
						{{Form::text("add_line1")}}
					 {{	$errors->first('add_line1')	}}
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Adderess line 2(Street):</label>
				<div class="col-sm-4">
						{{Form::text("add_line2")}}	
						{{	$errors->first('add_line2')	}}			
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Adderess line 3(Suburb/city):</label>
				<div class="col-sm-4">
						{{Form::text("add_line3")}}	
						{{	$errors->first('add_line3')	}}			
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Adderess line 4(State/Province):</label>
				<div class="col-sm-4">
						{{Form::text("add_line4")}}	
						{{	$errors->first('add_line4')	}}			
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Adderess line 5(Postal Code):</label>
				<div class="col-sm-4">
						{{Form::text("add_line5")}}
						{{	$errors->first('add_line5')	}}				
				</div>
			</div>
			<div class="form-group">
			<label class="col-sm-3 control-label">Country:</label>
			<div class="col-sm-4">
			<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
			<script type="text/javascript">
			function initialize() {
				var options = {
			types: ['(regions)'],
				};
					var input = document.getElementById('searchTextField');
					var autocomplete = new google.maps.places.Autocomplete(input , options);
				}
			google.maps.event.addDomListener(window, 'load', initialize);
			</script>
<div class = "row">
        <input id="searchTextField" type="text" size="50" placeholder="Enter a location" autocomplete="on">
	    </div>
		</div>
		</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Telephone:</label>
				<div class="col-sm-4">
						{{Form::text("telephone")}}				
						{{ $errors->first('telephone') }}
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">Facsimile::</label>
				<div class="col-sm-4">
						{{Form::text("facsimile")}}	
						{{	$errors->first('facsimile')	}}			
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">Email Address:</label>
				<div class="col-sm-4">
						{{Form::email("email")}}		
						{{ $errors->first('email')	}}	
				</div>
			</div>


			<div class="form-group">
				<label class="col-sm-3 control-label">URL:</label>
				<div class="col-sm-4">
						{{Form::text("url")}}			
						{{ $errors->first('URL') }}
				</div>
			</div>


			<div class="form-group">
				<label class="col-sm-3 control-label">Supplier Type:</label>
				<div class="col-sm-4">
						{{Form::select("supplier_type",array("Woods"=>"Woods","Toyota"=>"Toyota","Apple"=>"Apple","Samsung"=>"Samsung","Awesome Broom"=>"Awesome Broom"))}}				
						{{	$errors->first('supplier_type')	}}
				</div>
			</div>


			<div class="form-group">
				<label class="col-sm-3 control-label">Supplier Since(d/m/y):</label>
				<div class="col-sm-4">
						{{Form::text("supplier_since","01/01/2014")}}				
						{{ $errors->first('supplier since') }}
				</div>

			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">Bank Particulars:</label>
				<div class="col-sm-4">
						{{Form::text("bank_particulars")}}				
						{{ $errors->first('bank_particulars') }}
				</div>
			</div>


			<div class="form-group">
				<label class="col-sm-3 control-label">Bank Reference:</label>
				<div class="col-sm-4">
						{{Form::text("bank_reference","0")}}
						{{	$errors->first('bank_reference')	}}				
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">Bank Account Number:</label>
				<div class="col-sm-4">
						{{Form::text("bank_acc_number")}}	
						{{ $errors->first('bank_acc_number') }}			
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">Payment Terms:</label>
				<div class="col-sm-4">
						{{Form::select("payment_terms",array("Payment will be due by every month"=>"Payment will be due by every month",
								"Postpaid due 30th of the month"=>"Postpaid due 30th of the month",
								"Pre Paid pay as requested"=>"Pre Paid pay as requested",
								"Yearly Payment"=>"Yearly Payment"
								))}}	
								{{	$errors->first('payment_terms')	}}			
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">Factor Company:</label>
				<div class="col-sm-4">
						{{Form::select("factor_company",array("none"=>"none","company one"=>"company one"))}}
						{{	$errors->first('factor_company')	}}				
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">Tax Reference:</label>
				<div class="col-sm-4">
						{{Form::text("tax_reference")}}	
						{{	$errors->first('tex_reference')	}}			
				</div>
			</div>


			<div class="form-group">
				<label class="col-sm-3 control-label">Supplier Currency:</label>
				<div class="col-sm-4">
						{{Form::select("supplier_currency",array("Rupees"=>"Rupees","Dollar"=>"Dollar","Yen"=>"Yen","Mexican Peso"=>"Mexican Peso"))}}				
						{{	$errors->first('supplier_currency')	}}
				</div>
			</div>


			<div class="form-group">
				<label class="col-sm-3 control-label">Remittance Advice:</label>
				<div class="col-sm-4">
						{{Form::text("remittance_advice")}}	
						{{	$errors->first('remittance_advice')	}}			
				</div>
			</div>


			<div class="form-group">
				<label class="col-sm-3 control-label">Tax Group:</label>
				<div class="col-sm-4">
						{{Form::select("tax_group",array("Default"=>"Default","Ontario"=>"Ontario","UK inland revenue"=>"UK inland revenue","Canaris"=>"Canaris","INDIA"=>"INDIA"))}}				
						{{ $errors->first('tax group') }}
				</div>
			</div>

			<div class="pull-right">
				{{link_to('/','Cancel',array("class"=>"btn btn-danger"))}}
			{{Form::submit('Update',array("class"=>"btn btn-success"))}}
			</div>
			{{Form::close()}}
		</div>
	</section>
	</div>
	</div>


	</section>
</section>
@stop
