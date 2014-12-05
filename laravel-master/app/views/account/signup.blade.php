@extends('layouts.main')
@section('content')
<div class="container">
		{{ Form::open(array('url' => 'account/signup', "class"=>"form-signin")) }}
        <h2 class="form-signin-heading">register</h2>
        <div class="login-wrap">
            {{ Form::text('username', NULL, array('placeholder'=>'User Name', "class"=>"form-control")) }}
            {{ $errors->first('username') }}
            {{ Form::password('password',  array('placeholder'=>'Password', "class"=>"form-control")) }}
			{{ $errors->first('password') }}
			{{ Form::password('password_confirmation', array('placeholder'=>'Confirm password', "class"=>"form-control")) }}

            {{ Form::submit('Signup', array("class"=>"btn btn-lg btn-login btn-block")) }}

            <div class="registration">
                Already Registered? {{ link_to('account/signin','Login')}}
            </div>

        </div>

      {{ Form::close() }}

    </div>

<!-- <div class="">
	<h1>Signup</h1>
	{{ Form::open(array('url' => 'account/signup')) }}
	{{ Form::text('email', NULL, array('placeholder'=>'email')) }}
	{{ $errors->first('email') }}
	{{ Form::password('password',  array('placeholder'=>'password')) }}
	{{ $errors->first('password') }}
	{{ Form::password('password_confirmation', array('placeholder'=>'confirm password')) }}
	<p>
		{{ Form::submit('Signup') }}
	</p>
	{{ Form::close() }}
</div> -->
@stop
