<!doctype html>
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
			{{Form::open(array('url'=>'saved',"class" => "form-horizontal bucket-form"))}}
			<div class="form-group">
				<label class="col-sm-3 control-label">Default Date Format</label>
				<div class="col-sm-4">
				<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
				<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
				<script>
				$(function() {
				var availableTags = [
				"ActionScript",
				"AppleScript",
				"Asp",
				"BASIC",
				"C",
				"C++",
				"Clojure",
				"COBOL",
				"ColdFusion",
				"Erlang",
				"Fortran",
				"Groovy",
				"Haskell",
				"Java",
				"JavaScript",
				"Lisp",
				"Perl",
				"PHP",
				"Python",
				"Ruby",
				"Scala",
				"Scheme"
				];
				$( "#tags" ).autocomplete({
				source: 'getdatasuppliers'
				});
				});
				</script>
				<div class="ui-widget">
				<input id="tags">
				</div>
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
