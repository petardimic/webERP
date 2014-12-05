@extends('layout.main')
@section('content')
<section>
        <section class="wrapper">
        @include("errors.global_alert_messages")
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Reset Password
                    </header>
                    <div class="panel-body">

                    		{{ Form::open(array('url' => 'account/password/reset', "class" => "form-horizontal")) }}
                    		<!-- <form class="form-horizontal"> -->
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Password</label>
                                        <div class="col-lg-4">
                                        	{{ Form::password('password',  array('placeholder'=>'password', "class" => "form-control")) }}
                                        	{{ $errors->first('password') }}
                                            <!-- <input type="text" class="form-control" placeholder="ID Number"> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Confirm Password</label>
                                        <div class="col-lg-4">
                                        	{{ Form::password('password_confirmation', array('placeholder'=>'confirm password', "class" => "form-control")) }}
                                            <!-- <input type="text" class="form-control" placeholder="ID Number"> -->
                                        </div>
                                    </div>
                                     <div class="pull-right">
                                     <input type="hidden" name="token" value="{{ $token }}">
                    <!-- <button type="button" class="btn btn-danger">Skip</button> -->
                    <button type="submit" class="btn btn-success">Reset Password</button>
                    </div>
                    		{{ Form::close() }}
                            <!-- </form> -->

                    </div>
                </section>
            </div>
        </div>
</section>
    </section>
<!-- <div class="">
	<h1>Reset Password</h1>
	@if( Session::has('global_flash_message'))
	<p>{{ Session::get('global_flash_message') }}</p>
	@endif
	{{ Form::open(array('url' => 'account/password/reset')) }}
	{{ Form::password('password',  array('placeholder'=>'password')) }}
	{{ $errors->first('password') }}
	{{ Form::password('password_confirmation', array('placeholder'=>'confirm password')) }}
	<input type="hidden" name="token" value="{{ $token }}">
	{{ Form::submit('Reset Password') }}
	{{ Form::close() }}
</div> -->
@stop
