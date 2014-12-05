@extends('layouts.main')
@section('content')
@extends('includes/sidebar')
<section class="">
        <section class="wrapper">
        <!-- page start-->
         @include("errors.global_alert_messages")
        <div class="row">
        <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Add New Patient
            </header>
            <div class="panel-body">
            	{{ Form::open(array('url' => 'patient/add', "class"=>"form-horizontal bucket-form")) }}
                <!-- <form class="form-horizontal bucket-form" method="get"> -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Full Name</label>
                        <div class="col-sm-4">
                        	{{ Form::text('name', NULL, array('placeholder'=>'Enter patient name', "class"=>"form-control round-input")) }}
							{{ $errors->first('name') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" >Age</label>
                        <div class="col-sm-4">
                            {{ Form::text('age', NULL, array('placeholder'=>'Enter patient\'s age', "class"=>"form-control round-input")) }}
                            {{ $errors->first('age') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Contact</label>
                        <div class="col-sm-4">
                        	{{ Form::text('phone', NULL, array('placeholder'=> 'Enter Contact number', "class"=>"form-control round-input")) }}
                        	{{ $errors->first('phone') }}
                        </div>
                    </div>
                    
                    <div class="pull-right">
					{{ link_to('dashboard','Cancel', array("class"=>"btn btn-danger"))}}
                    {{ Form::submit('Save', array("class"=>"btn btn-success")) }}
                    <!-- <button type="button" class="btn btn-danger">Cancel</button>
                    <button type="button" class="btn btn-success">Save</button> -->
                    </div>
                <!-- </form> -->
				{{ Form::close() }}
            </div>
        </section>

        </div>
        </div>
        <!-- page end-->
        <!-- page end-->
        </section>
    </section>
@stop
