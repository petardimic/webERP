@extends('layouts.main')
@section('content')
<div class="container">

      {{ Form::open(array('url' => 'account/signin', "class"=>"form-signin")) }}
      @include("errors.global_alert_messages")
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <div class="user-login-info">
	            {{ Form::text('username', NULL, array('placeholder'=>'User Name', "class"=>"form-control", 'autofocus'=>'autofocus')) }}
	            <div class="has-error"><p class="help-block">{{ $errors->first('username') }}</p></div>
	            {{ Form::password('password', array('placeholder'=>'Password', "class"=>"form-control")) }}
	            <div class="has-error"><p class="help-block">{{ $errors->first('password') }}</p></div>
            </div>
            <label class="checkbox">
                <!-- <input type="checkbox" value="remember-me"> Remember me -->
            </label>
            {{ Form::submit('Sign in', array("class"=>"btn btn-lg btn-login btn-block")) }}
            <div class="registration">
                Don't have an account yet? {{ link_to('account/signup','Create an account') }}
            </div>
        </div>
        
      {{ Form::close() }}
@stop
