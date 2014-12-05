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
		SYSTEM PARAMETERS
		</header>
		<div class="panel-body">
			{{Form::open(array('url'=>'purchase_save',"class" => "form-horizontal bucket-form"))}}
			<div class="form-group">
				<label class="col-sm-3 control-label">Default Date Format</label>
				<div class="col-sm-4">
				{{Form::select('default_date_format',array('d/m/Y'=>'d/m/Y',
							'd.m.Y'=>'d.m.Y',
							'm/d/Y'=>'m/d/Y',
							'Y/m/d'=>'Y/m/d',
							'Y-m-d'=>'Y-m-d'))}}
				{{ $errors->first('default_date_format') }}
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
