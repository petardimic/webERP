@extends('layouts.main')
@section('content')
<section class="">
        <section class="wrapper">
        <!-- page start-->
        @include("errors.global_alert_messages")
        <div class="row">
        <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Profile Settings
            </header>
            <div class="panel-body">
				{{ Form::model($user, array('url' => array('user/profile', $user->id), "class"=>"form-horizontal bucket-form")) }}
                <!-- <form class="form-horizontal bucket-form" method="get"> -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Full Name</label>
                        <div class="col-sm-4">
                        	{{ Form::text('name', NULL, array('placeholder'=>'Enter your name', "class"=>"form-control round-input")) }}
							{{ $errors->first('name') }}
                            <!-- <input type="text" class="form-control round-input"> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" >Email</label>
                        <div class="col-sm-4">
                            {{ Form::text('email', NULL, array('placeholder'=>'Enter your Email', "class"=>"form-control round-input")) }}
							{{ $errors->first('email') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Contact</label>
                        <div class="col-sm-4">
                        	{{ Form::text('phone', NULL, array('placeholder'=> 'Enter your Contact number', "class"=>"form-control round-input")) }}
							{{ $errors->first('phone') }}
                            <!-- <input type="text" class="form-control round-input"> -->
                        </div>
                    </div>
                    
                   	<!-- <div class="form-group">
                        <label class="col-sm-3 control-label">Facebook</label>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-info signin-fb" style="margin:0 !important">Connect to Facebook</button>
                        </div>
                    </div> -->
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