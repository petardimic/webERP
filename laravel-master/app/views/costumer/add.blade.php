@extends('layouts.main')
@section('content')
@extends('includes/sidebar')
<section class="">
	<section class = "wrapper">
	@include("errors.global_alert_messages")
	<div class = "row" >
	<div class = "col-lg-12">
	<section class="panel">
		<header class="panel-heading">
		ADD COSTUMER</header>
		<div class="panel-body">
			{{Form::open(array('url'=>'costumer_save',"class" => "form-horizontal bucket-form"))}}
			<div class="form-group">
				<label class="col-sm-3 control-label">Costumer Name</label>
				<div class="col-sm-4">
				{{Form::text('costumer_name')}}
				{{ $errors->first('costumer_name') }}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Costumer Address</label>
				<div class="col-sm-4">
				{{Form::textarea('costumer_address')}}
				{{ $errors->first('costumer_address') }}
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
				<label class="col-sm-3 control-label">Costumer Type</label>
				<div class="col-sm-4">
				{{Form::select('costumer_type',array('Normal'=>'Normal','Special'=>'Special'))}}
				{{ $errors->first('costumer_type') }}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Discount Percantage</label>
				<div class="col-sm-4">
				{{Form::text('discount_percentage')}}
				{{ $errors->first('discount_percantage') }}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Discount Code</label>
				<div class="col-sm-4">
				{{Form::text('Discount_code')}}
				{{ $errors->first('Discount_code') }}
				</div>
			</div>
			<div class="pull-right">
				{{link_to('system','Cancel',array("class"=>"btn btn-danger"))}}
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
