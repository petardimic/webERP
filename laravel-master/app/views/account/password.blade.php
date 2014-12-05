@extends('layout.main')

@section('content')
<section>
    <section class="wrapper">
    @include("errors.global_alert_messages")
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Change Password
                </header>
                <div class="panel-body">
                {{ Form::open(array('url' => 'account/password/change', 'class'=>'form-horizontal')) }}
                				@if( !empty(Auth::user()->password) )
                					<div class="form-group">
	                                    <label class="col-lg-4 control-label">Old password</label>
	                                    <div class="col-lg-4">
											{{ Form::password('old_password',  array('placeholder'=>'old password', 'class'=>"form-control")) }}
	                                    	{{ $errors->first('old_password') }}
	                                    </div>
	                                </div>
								@endif
                                <div class="form-group">
                                    <label class="col-lg-4 control-label">New password</label>
                                    <div class="col-lg-4">
	                                    {{ Form::password('password',  array('placeholder'=>'password', 'class'=>"form-control")) }}
                                    	{{ $errors->first('password') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Confirm new password</label>
                                    <div class="col-lg-4">
		                                {{ Form::password('password_confirmation', array('placeholder'=>'confirm password', 'class'=>"form-control")) }}
                                    	{{ $errors->first('password_confirmation') }}
                                    </div>
                                </div>
                                 <div class="pull-right">
                                 	{{ link_to('dashboard','Cancel', array('class'=>'btn btn-danger'))}}
					                <!-- <button type="button" class="btn btn-danger">Skip</button> -->
					                <button type="submit" class="btn btn-success">Change Password</button>
				                </div>
                           {{ Form::close() }}

                </div>
            </section>
        </div>
    </div>
    </section>
</section>
@stop